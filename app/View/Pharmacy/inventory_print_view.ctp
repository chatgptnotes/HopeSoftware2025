<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pharmacy Bills</title>
    <style>
        @media print {
            @page {
                size: A4 portrait;
                margin: 5mm;
            }

            .no-print {
                display: none;
            }

            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                font-size: 11px;
                color: #000;
                width: 100%;
            }

            html {
                width: 100%;
            }
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 11px;
            color: #000;
            width: 100%;
        }

        /* Bill container - Full page width */
        .bill-container {
            width: 100%;
            max-width: 100%;
            min-height: 280mm;
            margin: 0;
            padding: 5mm;
            border: none;
            box-sizing: border-box;
            page-break-inside: avoid;
            background: white;
        }

        /* Force page break after each bill */
        .bill-container:not(:first-child) {
            page-break-before: always;
        }
        
        /* Header section */
        .bill-header {
            text-align: center;
            margin-bottom: 10px;
            border-bottom: 2px solid #333;
            padding-bottom: 8px;
        }

        .header-image {
            width: 100%;
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            display: block;
        }

        .clinic-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 3px;
        }

        .clinic-address {
            font-size: 10px;
            margin-bottom: 2px;
        }

        .bill-title {
            font-size: 14px;
            font-weight: bold;
            color: #d00;
            margin-top: 5px;
        }
        
        /* Bill info section */
        .bill-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 10px;
        }
        
        .bill-info-left, .bill-info-right {
            width: 48%;
        }
        
        .bill-info table {
            width: 100%;
            font-size: 11px;
        }

        .bill-info td {
            padding: 2px 4px;
            vertical-align: top;
        }

        /* Medicine table */
        .medicine-table {
            width: 100%;
            border-collapse: collapse;
            margin: 12px 0;
            font-size: 11px;
        }

        .medicine-table th {
            background-color: #f0f0f0;
            border: 1px solid #333;
            padding: 6px 4px;
            text-align: center;
            font-weight: bold;
            font-size: 11px;
        }

        .medicine-table td {
            border: 1px solid #333;
            padding: 4px 3px;
            vertical-align: top;
            font-size: 10px;
        }

        .medicine-name {
            max-width: 120px;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        
        /* Footer section */
        .bill-footer {
            margin-top: 20px;
            border-top: 1px solid #333;
            padding-top: 12px;
        }

        .total-section {
            text-align: right;
            font-weight: bold;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .signature-section {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
            font-size: 11px;
        }
    </style>
</head>
<body>

<!-- Print Button (hidden during print) -->
<div class="no-print" style="text-align: right; margin: 10px;">
    <button onclick="window.print()" style="background: #0066CC; color: white; padding: 8px 15px; border: none; border-radius: 4px; cursor: pointer;">Print Bills</button>
</div>

<?php
// Initialize data processing
if($section == "PurchaseReceipt"){
    $model = "InventoryPurchaseItemDetail";
    $heading = "Purchase Receipt";
}else if($section == "PharmacySalesBill"){
    $model = "PharmacySalesBillDetail";
    $taxSection = 'PharmacySalesBill';
    $rowCnt  = count($data['PharmacySalesBillDetail']) ;
    $heading = "Sales Bill";
}else if($section == "InventoryPurchaseReturn"){
    $model = "InventoryPurchaseReturnItem";
    $taxSection = 'InventoryPurchaseDetail';
    $rowCnt  = count($data['PharmacySalesBillDetail']) ;
    $heading = "Purchase Return";
}else if($section == "PharmacyDuplicateSalesBill"){
    $model = "PharmacyDuplicateSalesBillDetail";
    $taxSection = 'PharmacyDuplicateSalesBill';
    $rowCnt  = count($data['PharmacyDuplicateSalesBillDetail']) ;
    $heading = "Duplicate Sales Bill";
}else{
    $model = "InventoryPharmacySalesReturnsDetail";
    $taxSection = null;
    $rowCnt  = count($data['InventoryPharmacySalesReturnsDetail']) ;
    $heading = "Sales Return";
}

$grandtotal = 0;
$itemObj = Classregistry::init('PharmacyItem');

// if($section == "PharmacySalesBill") {
//     $discount  = isset($data['PharmacySalesBill']['discount']) ? $data['PharmacySalesBill']['discount'] : 0;
//     $tax = isset($data['PharmacySalesBill']['tax']) ? $data['PharmacySalesBill']['tax'] : 0;
    
//     // Get patient information
//     $Person = Classregistry::init('Person');
//     $person = $Person->find("first",array("conditions"=>array("Person.id"=>$data['Patient']['person_id'])));
// }


if($section == "PharmacySalesBill") {
    $discount  = isset($data['PharmacySalesBill']['discount']) ? $data['PharmacySalesBill']['discount'] : 0;
    $tax = isset($data['PharmacySalesBill']['tax']) ? $data['PharmacySalesBill']['tax'] : 0;
    
    // Get patient information
    $Person = Classregistry::init('Person');
    $person = $Person->find("first",array("conditions"=>array("Person.id"=>$data['Patient']['person_id'])));
    
    // Get doctor information if not already available
    if(empty($data['DoctorProfile']['doctor_name']) && isset($data['Patient']['doctor_id'])) {
        $User = Classregistry::init('User');
        $doctorName = $User->find("first",array("conditions"=>array("User.id"=>$data['Patient']['doctor_id'])));
    }
}
?>

<!-- Start Bill Container -->
<div class="bill-container">
    
    <!-- Bill Header -->
    <div class="bill-header">
        <!-- Header Image -->
        <img src="<?php echo $this->Html->url('/img/pharmacy_header.png'); ?>" alt="Hope Hospital Pharmacy Header" class="header-image" />

        <!-- Bill Title -->
        <div class="bill-title"><?php echo $heading; ?></div>
    </div>
    
    <!-- Bill Information -->
    <div class="bill-info">
        <div class="bill-info-left">
            <table>
                <tr>
                    <td><strong>Bill No:</strong></td>
                    <td><?php echo isset($data['PharmacySalesBill']['bill_code']) ? $data['PharmacySalesBill']['bill_code'] : (isset($data['PharmacyDuplicateSalesBill']['bill_code']) ? $data['PharmacyDuplicateSalesBill']['bill_code'] : '');?></td>
                </tr>
                <tr>
                    <td><strong>Date:</strong></td>
                    <td><?php 
                    if(isset($data['PharmacySalesBill']['create_time']) && $data['PharmacySalesBill']['create_time']){ 
                        echo $this->DateFormat->formatDate2Local($data['PharmacySalesBill']['create_time'],Configure::read('date_format'),true);
                    }
                    ?></td>
                </tr>
                <tr>
                    <td><strong>Patient:</strong></td>
                    <td><?php 
                    if(isset($data['Patient']['id'])) {
                        echo isset($person['Person']['first_name']) ? $person['Person']['first_name'].' '.$person['Person']['last_name'] : $data['Patient']['lookup_name'];
                    } else {
                        echo isset($data['PharmacySalesBill']['customer_name']) ? $data['PharmacySalesBill']['customer_name'] : '';
                    }
                    ?></td>
                </tr>
                <tr>
                    <td><strong>Prescribed by:</strong></td>
                    <td><?php 
                    if(isset($data['Patient']['id'])) {
                        if(!empty($data['DoctorProfile']['doctor_name'])) {
                            echo "Dr. ".$data['DoctorProfile']['doctor_name'];
                        } else if(isset($doctorName['User']['first_name'])) {
                            echo "Dr. ".$doctorName['User']['first_name']." ".$doctorName['User']['last_name'];
                        } else {
                            echo "N/A";
                        }
                    } else {
                        if(isset($data['PharmacySalesBill']['p_doctname']) && !empty($data['PharmacySalesBill']['p_doctname'])) {
                            echo $data['PharmacySalesBill']['p_doctname'];
                        } else {
                            echo "N/A";
                        }
                    }
                    ?></td>
                </tr>
            </table>
        </div>
        <div class="bill-info-right">
            <table>
                <tr>
                    <td><strong>Payment:</strong></td>
                    <td><?php echo isset($data['PharmacySalesBill']['payment_mode']) ? ucfirst($data['PharmacySalesBill']['payment_mode']) : ''; ?></td>
                </tr>
                <?php if(isset($data['PharmacySalesBill']['payment_mode']) && $data['PharmacySalesBill']['payment_mode'] == 'credit') { ?>
                <tr>
                    <td colspan="2" style="color: red; font-weight: bold;">Credit</td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <!-- Medicine Table -->
    <table class="medicine-table">
        <thead>
            <tr>
                <th style="width: 40%;">Item Name</th>
                <th style="width: 15%;">Pkg</th>
                <th style="width: 15%;">Batch No.</th>
                <th style="width: 10%;">Exp Date</th>
                <th style="width: 10%;">Qty</th>
                <th style="width: 10%;">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($section == "PharmacySalesBill" && isset($data['PharmacySalesBillDetail'])) {
                foreach($data['PharmacySalesBillDetail'] as $item) {
                    $pharItem = $itemObj->find('first',array('conditions' =>array('PharmacyItem.id' => $item['item_id'])));

                    $productName = isset($pharItem['PharmacyItem']['name']) ? $pharItem['PharmacyItem']['name'] : '';
                    $pack = isset($pharItem['PharmacyItem']['pack']) ? $pharItem['PharmacyItem']['pack'] : '';
                    $batch_number = isset($item['batch_number']) ? $item['batch_number'] : '';
                    $packOFproduct = isset($item['pack']) ? (int)$item['pack'] : 1;
                    $itemType = isset($item['qty_type']) ? $item['qty_type'] : '';
                    $qty = isset($item['qty']) ? $item['qty'] : 0;

                    $expiry_date = '';
                    if(!empty($item['expiry_date'])){
                        $newDate = explode("-",$item['expiry_date']);
                        $expiry_date = (count($newDate) >= 2) ? $newDate[1]."/".$newDate[0] : "";
                    }

                    $price = 0;
                    if(!empty($item['sale_price'])){
                        $price = (float)$item['sale_price'];
                    } else if(!empty($item['mrp'])){
                        $price = (float)$item['mrp'];
                    } else if(isset($pharItem['PharmacyItemRate']['mrp'])) {
                        $price = (float)$pharItem['PharmacyItemRate']['mrp'];
                    }

                    $total = 0;
                    if($itemType == "Pack"){
                        $total = $price * $qty;
                    } else if($itemType == "Unit" && $packOFproduct > 0){
                        $total = ($price/$packOFproduct) * $qty;
                    } else if($itemType == "Tab" && $packOFproduct > 0){
                        $total = ($price/$packOFproduct) * $qty;
                    }

                    $grandtotal += $total;
            ?>
            <tr>
                <td class="medicine-name"><?php echo $productName; ?></td>
                <td class="text-center"><?php echo $pack; ?></td>
                <td class="text-center"><?php echo $batch_number; ?></td>
                <td class="text-center"><?php echo $expiry_date; ?></td>
                <td class="text-center"><?php echo $qty; ?></td>
                <td class="text-right"><?php echo number_format($total,2); ?></td>
            </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>

    <!-- Bill Footer -->
    <div class="bill-footer">
        <div class="total-section">
            <?php
            $totalTax = 0;
            if(isset($tax) && $tax > 0) {
                $totalTax = ($grandtotal * $tax) / 100;
            }
            $finalTotal = $grandtotal - (isset($discount) ? $discount : 0) + $totalTax;
            ?>
            <div>Total: <?php echo $this->Number->currency($finalTotal); ?></div>
        </div>

        <div class="signature-section">
            <div>Patient Signature</div>
            <div>Pharmacist Signature</div>
        </div>
        <br>
        <div>
            <div>GST No. 27ACLPV4078L1ZQ</div>
            <div>D.L. No. 20-NAG/136/2009, 21-NAG/136/2009</div>
        </div>
    </div>

</div>
<!-- End Bill Container -->

<script>
window.onload=function(){self.print();}
</script>

</body>
</html>

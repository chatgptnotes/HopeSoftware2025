<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Individual Bill Format</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
 body {
      font-family: Arial, sans-serif;
      font-size: 14px;
      padding: 20px;
      background-color: #fff;
    }

    .label {
      width: 280px;
      font-weight: bold;
    }

    .value {
      flex: 1;
    }

    .info-row {
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 8px;
    }

    .box {
      border: 1px solid #ccc;
      padding: 20px;
      margin-top: 20px;
    }

    .section-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }

    @media print {
      @page {
        size: A4;
        margin: 20mm;
      }

      body {
        padding: 0;
        background: none;
      }

      .no-print {
        display: none !important;
      }

      .box {
        border: none;
        padding: 0;
      }
    }
    @media print {
    .btn, .action-buttons { display: none; }
  }

  .container {
    background: white;
    page-break-inside: avoid;
  }

  table th, table td {
    vertical-align: middle;
  }

  .clearfix {
    clear: both;
  }

  /* Responsive Tables */
  .table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  table input[type="text"] {
    width: 100%;
    min-width: 80px;
    padding: 5px;
    border: 1px solid #ccc;
    font-size: 12px;
  }

  /* Button Styles */
  .btn-custom {
    background-color: #007bff;
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin: 5px;
  }

  .btn-custom:hover {
    background-color: #0056b3;
  }

  .btn-delete {
    background-color: #dc3545;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 12px;
  }

  .btn-delete:hover {
    background-color: #c82333;
  }

  /* Mobile Responsive */
  @media (max-width: 768px) {
    .container-fluid {
      padding: 10px;
    }

    .section-title {
      font-size: 18px;
    }

    .field {
      display: block;
      margin-bottom: 12px;
    }

    .label {
      display: block;
      min-width: auto;
      margin-bottom: 5px;
    }

    .value {
      display: block;
    }

    .photo-box {
      width: 100%;
      max-width: 200px;
      height: 120px;
      margin: 0 auto 15px;
      float: none;
    }

    table {
      font-size: 12px;
    }

    table th,
    table td {
      padding: 3px;
      font-size: 11px;
    }

    table input[type="text"] {
      min-width: 60px;
      padding: 3px;
      font-size: 10px;
    }

    .btn-custom {
      padding: 6px 12px;
      font-size: 14px;
      display: block;
      width: 100%;
      margin: 10px 0;
    }

    .signature-section {
      flex-direction: column !important;
      gap: 20px;
    }

    .signature-section > div {
      text-align: center;
    }
  }

  /* Tablet Responsive */
  @media (min-width: 769px) and (max-width: 1024px) {
    .container-fluid {
      padding: 20px;
    }

    .photo-box {
      float: right;
      margin-left: 20px;
    }

    table input[type="text"] {
      min-width: 70px;
      font-size: 11px;
    }
  }

  /* Large Screen */
  @media (min-width: 1025px) {
    .container-fluid {
      max-width: 1200px;
      margin: 0 auto;
      padding: 30px 20px;
    }

    .photo-box {
      float: right;
      margin-left: 20px;
    }
  }

  @media print {
    body {
      font-size: 12px;
      margin: 0;
      padding: 0;
    }

    .container-fluid {
      width: 100% !important;
      max-width: 100% !important;
      margin: 0 !important;
      padding: 0 !important;
    }

    .btn-custom,
    .btn-delete,
    button,
    .add-row-section {
      display: none !important;
    }

    table {
      page-break-inside: avoid;
      break-inside: avoid;
      width: 100% !important;
      font-size: 12px !important;
    }

    input[type="text"] {
      border: none !important;
      outline: none !important;
    }

    @page {
      size: A4 portrait;
      margin:3mm;
    }
    .section.row {
      display: flex !important;
      flex-wrap: wrap !important;
      gap: 0 !important;
    }
    .field.col-md-6 {
      width: 50% !important;
      float: left !important;
      display: block !important;
      box-sizing: border-box !important;
      margin-bottom: 0 !important;
    }
    .photo-box {
      display: block !important;
      float: right !important;
      margin-left: 20px !important;
      margin-top: 0 !important;
      margin-bottom: 15px !important;
      position: static !important;
    }
    .d-none {
      display: block !important;
    }
    th, td {
      padding: 4px !important;
    }
  }

  input[type="text"] {
    border: 1px solid #ccc;
    padding: 4px;
    font-size: 13px;
  }

 .signature-section {
  margin-top: 50px;
}

.signature-account {
  display: flex;
  justify-content: flex-end;
  margin-bottom: 60px;
}
.signature-account p {
  text-align: right;
  margin: 0;
}

.signature-row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.signature-left, .signature-right {
  flex: 1 1 45%;
  min-width: 250px;
}

.signature-left {
  text-align: left;
}

.signature-right {
  text-align: right;
}

@media print {
  .signature-row {
    flex-wrap: nowrap;
  }
}
/* Compact table adjustments */
.compact-table th,
.compact-table td {
  font-size: 11px;
  padding: 2px 4px;
  word-wrap: break-word;
}

/* Optional: Adjust container padding for print */
@media print {
  body {
    margin: 10mm;
  }

  .compact-table th,
  .compact-table td {
    font-size: 8px !important;
    padding: 1px 2px !important;
  }

  .btn, .action-buttons {
    display: none !important;
  }
}
 @media print {
  input {
    border: none !important;
    background: transparent !important;
    box-shadow: none !important;
    appearance: none;
  }

  input[type="date"]::-webkit-inner-spin-button,
  input[type="date"]::-webkit-calendar-picker-indicator {
    display: none;
    -webkit-appearance: none;
  }
}



</style>

</head>
<body>
<div class="container ">
    <div class="text-end mb-3 no-print">
      <button onclick="window.print()" class="btn btn-primary">Print</button>
    </div>
    
    <div class="box">
      <div class="section-title">INDIVIDUAL BILL FORMAT</div>
    
        <div class="row mb-3">
          <div class="col-12 d-flex justify-content-between align-items-center">
            <div>
              <label for="claim_id" class="fw-bold me-1">CLAIM ID:</label>
              <input type="text" name="claim_id" id="claim_id" class="border-0 bg-transparent" value="<?php echo h($claim_id); ?>">
            </div>
            <div>
              <label for="bill_date" class="fw-bold me-1">Bill Date:</label>
              <input type="date" name="bill_date" id="bill_date" class="border-0 bg-transparent" value="<?php echo h($bill_date); ?>">
            </div>
          </div>
        </div>


    
      <div class="info-row">
        <div class="label">Name of Patient</div>
        <div class="value">: <?php echo $patient['PatientInitial']['name'] . " " . $patient['Patient']['lookup_name']; if($patient['Patient']['vip_chk'] == '1'){ echo " (VIP)"; } ?></div>
      </div>
    
      <div class="info-row">
        <div class="label">Age / Sex</div>
        <div class="value">: 
          <?php
            if (!empty($patient['Person']['dob'])) {
              $date1 = new DateTime($patient['Person']['dob']);
              $date2 = new DateTime();
              $interval = $date1->diff($date2);
              echo ($interval->y > 0) ? $interval->y . "Y" : (($interval->m > 0) ? $interval->m . "M" : $interval->d . "D");
            }
            echo " / " . ucfirst($patient['Person']['sex']);
          ?>
        </div>
      </div>
    
      <?php if(!empty($address)){ ?>
      <div class="info-row">
        <div class="label">Address</div>
        <div class="value">: <?php echo $address; ?></div>
      </div>
      <?php } ?>
    
      <div class="info-row">
        <div class="label">Contact No.</div>
        <div class="value">: NOT AVAILABLE</div>
      </div>
    
      <?php if($patient['Person']['insurance_number'] || $patient['Person']['executive_emp_id_no'] || $patient['Person']['non_executive_emp_id_no']){ ?>
      <div class="info-row">
        <div class="label">Insurance No. / Staff Card No</div>
        <div class="value">: <?php echo $patient['Person']['insurance_number'] ?: ($patient['Person']['executive_emp_id_no'] ?: $patient['Person']['non_executive_emp_id_no']); ?></div>
      </div>
      <?php } ?>
    
      <?php if (!empty($patient['Patient']['date_of_referral'])) { ?>
      <div class="info-row">
        <div class="label">Date of Referral</div>
        <div class="value">: <?php echo date('d-m-Y', strtotime($patient['Patient']['date_of_referral'])); ?></div>
      </div>
      <?php } ?>
    
      <div class="info-row">
        <div class="label">Diagnosis</div>
        <div class="value">:
          <?php
            $diagnosis = h($diagnosisData['Diagnosis']['final_diagnosis']);
            $words = explode(' ', $diagnosis);
            $formatted = '';
            foreach ($words as $index => $word) {
              $formatted .= $word . ' ';
              if (($index + 1) % 6 == 0) {
                $formatted .= '<br>';
              }
            }
            echo $formatted;
          ?>
        </div>
      </div>
    
      <?php if($patient['Patient']['form_received_on']){ ?>
      <div class="info-row">
        <div class="label">Date of Admission</div>
        <div class="value">: <?php echo $this->DateFormat->formatDate2Local($patientdesignation['Patient']['create_time'], Configure::read('date_format'), true); ?></div>
      </div>
      <?php } ?>
    
      <?php if (!empty($patient['Patient']['discharge_date'])) {
        $splitDate = explode(" ", $patient['Patient']['discharge_date']);
        $onlyDate = $splitDate[0]; ?>
      <div class="info-row">
        <div class="label">Date of Discharge</div>
        <div class="value">: <?php echo $this->DateFormat->formatDate2Local($onlyDate, Configure::read('date_format'), true); ?></div>
      </div>
      <?php } ?>
    
      <div class="info-row">
        <div class="label">Condition of the patient at discharge</div>
        <div class="value">: Stable</div>
      </div>
    
      <div class="info-row">
        <div class="label">(For package Rates)<br>Treatment / Procedure done / performed</div>
        <div class="value">: <?php echo $dynamicText; ?></div>
      </div>
    
    <form action="save_additional_procedures" method="post"  >
      <p><strong>1 .  Existing in the package rate lists</strong><br>CGHS/Other Code No/Nos for Chargeable procedures</p>
    
      <div style="max-width: 900px; margin: auto;">
        <table id="procedureTable" class="table table-bordered table-sm text-center compact-table align-middle w-auto">
          <thead class="table-light">
        <tr>
          <th>Sr.<br>no.</th>
          <th>Chargeable <br>Procedures</th>
          <th>CGHS Code</th>
          <th>Other Code</th>
          <th>Rate</th>
          <th>AmountClaimed with <br> Date</th>
          <th>Amount Admitted with <br>Date(X)</th>
          <th>Remarks <br>X</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $srno = 1;
        if (!empty($surgeriesData)) {
            foreach ($surgeriesData as $surg) {
                if (!empty($surg['TariffList']['name'])) {
                    ?>
                    <tr>
                      <td><input type="text" name="srno[]" value="<?= $srno++; ?>"></td>
                      <td><input type="text" name="procedure[]" value="<?= h($surg['TariffList']['name']); ?>"></td>
                      <td><input type="text" name="cghs_code[]" value="<?= h($surg['TariffList']['cghs_code']); ?>"></td>   
                        <td><input type="text" name="other_code[]"></td>
                      <td><input type="text" name="rate[]" value="<?= h($surg['TariffAmount']['nabh_charges']); ?>"></td>
                      <td><input type="text" name="amount_claimed[]"></td>
                      <td><input type="text" name="amount_admitted[]"></td>
                      <td><input type="text" name="remarks[]"></td>
                      <td><button type="button" class="btn-delete" onclick="deleteRow(this)">Delete</button></td>
                    </tr>
                    <?php
                }
            }
        } else {
            // Fallback: blank row if no surgeries
            ?>
            <tr>
              <td><input type="text" name="srno[]"></td>
              <td><input type="text" name="procedure[]"></td>
              <td><input type="text" name="cghs_code[]"></td>
              <td><input type="text" name="other_code[]"></td>
              <td><input type="text" name="rate[]"></td>
              <td><input type="text" name="amount_claimed[]"></td>
              <td><input type="text" name="amount_admitted[]"></td>
              <td><input type="text" name="remarks[]"></td>
              <td><button type="button" class="btn-delete" onclick="deleteRow(this)">Delete</button></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
      </div>
      <br>
      <button type="submit" class="btn-custom">Submit</button>
    </form>
    
    <div id="responseMessage"></div>
    
    <br>
    <button type="button" onclick="addRow()" class="btn-custom">Add Row</button>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#procedureForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission
    
        $.ajax({
          url: '<?= $this->Html->url(['controller' => 'Billings', 'action' => 'p2_form_submit', $patient_id]) ?>',
          type: 'POST',
          data: $(this).serialize(), // Serialize form data
          success: function(response) {
            $('#responseMessage').html('<span style="color: green;">Data submitted successfully!</span>');
            console.log(response);
          },
          error: function(xhr) {
            $('#responseMessage').html('<span style="color: red;">Error submitting data.</span>');
            console.log(xhr.responseText);
          }
        });
      });
    });
    </script>
    
    
    <script>
    function addRow() {
      const table = document.getElementById("procedureTable").getElementsByTagName('tbody')[0];
          const newRow = table.insertRow();
        
          const columns = ["srno[]", "procedure[]", "cghs_code[]", "other_code[]", "rate[]", "amount_claimed[]", "amount_admitted[]", "remarks[]"];
          for (let i = 0; i < columns.length; i++) {
            const cell = newRow.insertCell(i);
            cell.innerHTML = <input type="text" name="${columns[i]}">;  // ❌ WRONG: Syntax error here (no quotes)
          }
        
          const actionCell = newRow.insertCell(columns.length);
          actionCell.innerHTML = '<button type="button" class="btn-delete" onclick="deleteRow(this)">Delete</button>';
    }
</script>

   <script>
    function addRow() {
      const table = document.querySelector("table tbody");
      const newRow = document.createElement("tr");
    
      newRow.innerHTML = `
        <td><input type="text" name="srno[]"></td>
        <td><input type="text" name="procedure[]"></td>
        <td><input type="text" name="cghs_code[]"></td>
        <td><input type="text" name="other_code[]"></td>
        <td><input type="text" name="rate[]"></td>
        <td><input type="text" name="amount_claimed[]"></td>
        <td><input type="text" name="amount_admitted[]"></td>
        <td><input type="text" name="remarks[]"></td>
        <td><button type="button" class="btn-delete" onclick="deleteRow(this)">Delete</button></td>
      `;
    
      table.appendChild(newRow);
    }
</script>

<script>
// Function to calculate and update total rate
function updateTotalRate() {
  let total = 0;
  $('input[name="rate[]"]').each(function () {
    const val = parseFloat($(this).val());
    if (!isNaN(val)) {
      total += val;
    }
  });
  $('#procedureTableTotal').text(total.toFixed(2));
}

// Trigger on page load
$(document).ready(function () {
  updateTotalRate(); // Calculate initial total

  // Update total whenever a rate field changes
  $(document).on('input', 'input[name="rate[]"]', function () {
    updateTotalRate();
  });
});
</script>
<script>
function deleteRow(button) {
  const row = button.closest("tr");
  row.remove();
}
</script>



    <p>Charges of implant /device used ___________</p>
    
    <table style="width:100%; border: none; margin-top: 10px;">
      <tr>
        <td><strong>Amount Claimed-</strong> <strong>Rs. <span id="procedureTableTotal">0</span></strong></td>
        <td><strong>Amount Admitted</strong></td>
        <td><strong>Remarks</strong></td>
      </tr>
    </table>
<p><strong>II. &nbsp; (Non - Package Rates ) For Procedures done (Not existing in the list of Packages)</strong></p>

<div class="table-responsive">
  <table class="table table-bordered" id="nonPackageTable">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Chargeable Procedure</th>
        <th>Amt claimed with date</th>
        <th>Amount Admitted with date(X)</th>
        <th>Remarks(X)</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sno = 1;
      $hosType = ($this->Session->read('hospitaltype')=='NABH') ? 'nabh_charges' : 'non_nabh_charges';

      // ==== Group and Sum Laboratory ====
      $labGrouped = [];
      foreach ($labDetail as $labCost) {
          $name = $labCost['Laboratory']['name'];
          $amount = !empty($labCost['LaboratoryTestOrder']['amount'])
                    ? $labCost['LaboratoryTestOrder']['amount']
                    : $labCost['TariffAmount'][$hosType];

          if (!isset($labGrouped[$name])) {
              $labGrouped[$name] = ['qty' => 1, 'rate' => $amount];
          } else {
              $labGrouped[$name]['qty'] += 1;
          }
      }

      foreach ($labGrouped as $testName => $data) {
          $qty = $data['qty'];
          $rate = $data['rate'];
          $total = $rate * $qty;
          ?>
          <tr>
            <td><?= $sno++; ?></td>
            <td><?= h($testName); ?></td>
            <td><?= number_format($rate, 2); ?> x <?= $qty; ?></td>
            <td><strong><?= number_format($total, 2); ?>/-</strong></td>
            <td></td>
          </tr>
          <?php
      }

      // ==== Group and Sum Radiology ====
      $radGrouped = [];
      foreach ($radiology as $radCost) {
          $name = $radCost['Radiology']['name'];
          $amount = !empty($radCost['RadiologyTestOrder']['amount'])
                    ? $radCost['RadiologyTestOrder']['amount']
                    : $radCost['RadiologyTestOrder'][$hosType];

          if (!isset($radGrouped[$name])) {
              $radGrouped[$name] = ['qty' => 1, 'rate' => $amount];
          } else {
              $radGrouped[$name]['qty'] += 1;
          }
      }

      foreach ($radGrouped as $testName => $data) {
          $qty = $data['qty'];
          $rate = $data['rate'];
          $total = $rate * $qty;
          ?>
          <tr>
            <td><?= $sno++; ?></td>
            <td><?= h($testName); ?></td>
            <td><?= number_format($rate, 2); ?> x <?= $qty; ?></td>
            <td><strong><?= number_format($total, 2); ?>/-</strong></td>
            <td></td>
          </tr>
          <?php
      }
      ?>
    </tbody>
  </table>
  <button type="button" class="btn btn-sm btn-primary" id="addRowBtn">+ Add Row</button>
  <button type="submit" class="btn btn-sm btn-success">Save</button>
</div>

<!-- jQuery (if not already loaded) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    let sno = <?= $sno ?>;

    $('#addRowBtn').click(function () {
      let newRow = `
        <tr>
          <td>${sno++}</td>
          <td><input type="text" name="manual_procedure[]" class="form-control" /></td>
          <td><input type="text" name="manual_claimed[]" class="form-control" /></td>
          <td><input type="text" name="manual_admitted[]" class="form-control" /></td>
          <td><input type="text" name="manual_remarks[]" class="form-control" /></td>
        </tr>
      `;
      $('#nonPackageTable tbody').append(newRow);
    });
  });
</script>
    
    <p><strong>III. Additional Procedure done with rationale and documented permission</strong></p>
    
    <form id="additionalProcedureForm">
      <div style="max-width: 900px; margin: auto;">
        <table class="table table-bordered table-sm text-center compact-table align-middle w-auto">
          <thead>
            <tr>
              <th>S.No</th>
              <th>Chargeable Procedure</th>
              <th>CGHS Code no with page no(1)</th>
              <th>Other if not on (1)<br>Prescribed code no with page no</th>
              <th>Rate</th>
              <th>Amt Claimed with date</th>
              <th>Amount admitted with date (X)</th>
              <th>Remarks (X)</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="additionalProcedureBody">
            <!-- Rows will be added here -->
          </tbody>
        </table>
      </div>
      <button type="button" class="btn-custom" onclick="addProcedureRow()">+ Add Row</button>
      <button type="submit" class="btn-custom">Save Additional Procedures</button>
    </form>
    <br>
    <script>
    let procedureRowCount = 0;
    
    function addProcedureRow() {
      const row = `
        <tr>
          <td>${procedureRowCount + 1}</td>
          <td><input type="text" name="procedure[${procedureRowCount}][name]" /></td>
          <td><input type="text" name="procedure[${procedureRowCount}][cghs_code]" /></td>
          <td><input type="text" name="procedure[${procedureRowCount}][other_code]" /></td>
          <td><input type="text" name="procedure[${procedureRowCount}][rate]" /></td>
          <td><input type="text" name="procedure[${procedureRowCount}][claimed]" /></td>
          <td><input type="text" name="procedure[${procedureRowCount}][admitted]" /></td>
          <td><input type="text" name="procedure[${procedureRowCount}][remarks]" /></td>
          <td><button type="button" class="btn-delete" onclick="deleteProcedureRow(this)">Delete</button></td>
        </tr>
      `;
      $('#additionalProcedureBody').append(row);
      procedureRowCount++;
    }
    
    function deleteProcedureRow(button) {
      $(button).closest('tr').remove();
    }
    
    $('#additionalProcedureForm').on('submit', function(e) {
      e.preventDefault();
    
      $.ajax({
        url: '<?= $this->Html->url(['controller' => 'Billings', 'action' => 'save_additional_procedures', $patient_id]) ?>',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          alert('Additional procedures saved successfully!');
          console.log(response);
        },
        error: function(xhr) {
          alert('Error saving additional procedures data');
          console.error(xhr.responseText);
        }
      });
    });
    
    // Function to calculate first table (procedureTable) rate total
    function calculateProcedureTableTotal() {
      let total = 0;
      
      $('#procedureTable tbody tr').each(function() {
        const rateInput = $(this).find('input[name="rate[]"]');
        if (rateInput.length > 0) {
          const rate = parseFloat(rateInput.val()) || 0;
          total += rate;
        }
      });
      
      $('#procedureTableTotal').text(total.toFixed(2));
      return total;
    }
    
    // Function to calculate total amounts
    function calculateTotalAmounts() {
      let totalClaimed = 0;
      let totalAdmitted = 0;

  // Table I
  $('#procedureTable tbody tr').each(function() {
    const rate = parseFloat($(this).find('input[name="rate[]"]').val()) || 0;
    const claimed = parseFloat($(this).find('input[name="amount_claimed[]"]').val()) || rate;
    const admitted = parseFloat($(this).find('input[name="amount_admitted[]"]').val()) || 0;
    totalClaimed += claimed;
    totalAdmitted += admitted;
  });

  // Table II (Labs & Radio)
  $('.table-responsive table tbody tr').each(function() {
    const amountText = $(this).find('td:nth-child(4)').text().replace(/[^\d.-]/g, '');
    const amt = parseFloat(amountText) || 0;
    totalClaimed += amt;
    totalAdmitted += amt;
  });

  // Table III (Additional Procedures)
  $('#additionalProcedureBody tr').each(function() {
    const rate = parseFloat($(this).find('input[name*="[rate]"]').val()) || 0;
    const claimed = parseFloat($(this).find('input[name*="[claimed]"]').val()) || rate;
    const admitted = parseFloat($(this).find('input[name*="[admitted]"]').val()) || 0;
    totalClaimed += claimed;
    totalAdmitted += admitted;
  });

  $('#totalAmountClaimedSum').text(totalClaimed.toFixed(2));
  $('#totalAmountAdmitted').text(totalAdmitted.toFixed(2));
}

    
    // Event listeners to recalculate when values change
    $(document).ready(function() {
      // Calculate initial totals
      calculateProcedureTableTotal();
      calculateTotalAmounts();
    
      // Recalculate when input values change
      $(document).on('input change', 'input[name="rate[]"], input[name="amount_claimed[]"], input[name="amount_admitted[]"]', function() {
        calculateProcedureTableTotal();
        calculateTotalAmounts();
      });
    
      // Recalculate when additional procedure inputs change
      $(document).on('input change', 'input[name*="[rate]"], input[name*="[claimed]"], input[name*="[admitted]"]', function() {
        calculateTotalAmounts();
      });
    
      // Recalculate when rows are added or deleted
      $(document).on('click', 'button[onclick*="deleteRow"], button[onclick*="deleteProcedureRow"]', function() {
        setTimeout(function() {
          calculateProcedureTableTotal();
          calculateTotalAmounts();
        }, 100); // Small delay to allow DOM update
      });
    });
    
    // Update the addRow function to recalculate totals
    const originalAddRow = window.addRow;
    window.addRow = function() {
      if (originalAddRow) originalAddRow();
      setTimeout(function() {
        calculateProcedureTableTotal();
        calculateTotalAmounts();
      }, 100);
    };
    
    // Update the addProcedureRow function to recalculate totals
    const originalAddProcedureRow = window.addProcedureRow;
    window.addProcedureRow = function() {
      if (originalAddProcedureRow) originalAddProcedureRow();
      setTimeout(calculateTotalAmounts, 100);
    };
    </script>
    <script>
$(function(){
  function recalcAll() {
    let total = 0;

    // I. Package Rates Table
    $('#procedureTable tbody tr').each(function(){
      const rate = parseFloat($(this).find('input[name="rate[]"]').val()) || 0;
      total += rate;
    });

    // II. Non‑Package (Lab & Radiology)
    $('.table-responsive tbody tr').each(function(){
      const txt = $(this).find('td:nth-child(4)').text().replace(/[^\d.-]/g,'');
      const amt = parseFloat(txt) || 0;
      total += amt;
    });

    // III. Additional Procedures
    $('#additionalProcedureBody tr').each(function(){
      const rate = parseFloat($(this).find('input[name*="[rate]"]').val()) || 0;
      total += rate;
    });

    // Update both totalClaimed and totalAdmitted
    $('#totalAmountClaimed').text(total.toFixed(2));
    $('#totalAmountAdmitted').text(total.toFixed(2));
  }

  // Initial calculation
  recalcAll();

  // Recalculate on input or row changes
  $(document).on('input change', 'input[name="rate[]"], input[name*="[rate]"]', recalcAll);
  $(document).on('click', '.btn-delete, button[onclick*="addRow"], button[onclick*="addProcedureRow"]', () => {
    setTimeout(recalcAll, 50);
  });
});
</script>

    
    <p style="margin-top: 10px;">
      <strong>Total Amount Claimed (I + II + III) Rs. <span id="totalAmountClaimed">0.00</span>/-</strong>
    </p>
    
    <p style="margin-top: 5px;">
      <strong>Total Amount Admitted (X) (I + II + III) Rs. <span id="totalAmountAdmitted">0.00</span>/-</strong>
    </p>
    <div style="margin-top: 50px; font-family: Arial, sans-serif;">
      <p><strong>Remarks :</strong></p>
    
      <p>
        Certified that the treatment/procedure has been done performed as per laid down norms and the charges in the bill has/have been claimed as per the terms &amp; conditions laid down in the agreement signed with ESIC.
      </p>
    
      <p>
        Further certified that the treatment/procedure have been performed on cashless basis. No money has been received/demanded/charged from the patient/his/her relative.
      </p>
    
      <div style="display: flex; justify-content: space-between; margin-top: 80px; width: 100%;">
      <div style="width: 45%; text-align: left;">
        <u>Sign/Thumb impression of patient with date</u>
      </div>
      <div style="width: 45%; text-align: right;">
        <u>Sign &amp; stamp of Authorised Signatory with Date</u>
      </div>
    </div>
    
    </div>
    <tr></tr>
    <tr></tr>
    <div style="font-family: Arial, sans-serif; font-size: 14px; margin-top: 30px;">
      <p style="text-align: center;"><strong>(The official use of ESIC)</strong></p>
    
      <p><strong>Total Amt Payable:</strong> _______________________</p>
      <p><strong>Date of payment:</strong> _______________________</p>
    
      <p>
        Signature of Dealing Assistant: <u>Signature of Superintendent:</u>
      </p>
    
      <p>
        Date: _______________________ &nbsp;&nbsp;&nbsp;&nbsp;
        Signature of ESIC Competent Authority (MS/SMC/SSMC)
      </p>
    
      <ol>
        <li>Discharge slip containing treatment summary & detailed treatment record.</li>
        <li>Bill(s) of implant(s)/stent(s)/device along with pouch/packet/invoice etc.</li>
        <li>Photocopies of referral proforma, insurance card/photo ID card of IP/referral, recommendation of medical officer, & entitlement certificate. Approval letter from SMC/SSMC in case of emergency treatment or additional procedure performed.</li>
        <li>Sign & stamp of Authorised Signatory.</li>
        <li>Patient/attendant satisfaction certificate.</li>
        <li>Document in favour of permission taken for additional procedure/treatment or investigation.</li>
      </ol>
    
      <p><strong><u>(X) To be filled by ESIC Officials.</u></strong></p>
    
      <p>
        Photocopy of duly filled format to be sent to Tie-up Hospital and original to be kept in record by ESIC while informing Tie-up Hospital about approval of claim.
      </p>
    </div>
    <div style="font-family: Arial, sans-serif; font-size: 14px; margin-top: 30px;">
      <p><strong><u>Checklist</u></strong></p>
    
      <ol>
        <li>Investigation Report of each individual/Pt.</li>
        <li>Copy of Referral Document of each individual/Pt.</li>
        <li>Serialization of individual bill as per the Sr. No. in the bill.</li>
      </ol>
    
      <br>
    
      <p>
        It is certified that total amount of Rs ____________________________ has been credited to your account no. __________________, RTGS no ______________________ on ____________________________.
      </p>
    
      <br><br>
    
      <div class="signature-section">
      <div class="signature-account">
        <p>Signature of Account department<br>with stamp</p>
      </div>
        <br><br>
      <div class="signature-row">
        <div class="signature-left">
          <p>Date: _______________________</p>
        </div>
        <div class="signature-right">
          <p>
            Signature of Competent<br>
            Authority<br>
            Referral Hospital.
          </p>
        </div>
      </div>
    </div>
    
    
      <p><strong><u>(x) to be Filled by ESIC Official(s).</u></strong></p>
    
      <p>
        Photocopy of duly filled format to be sent to Tie-up Hospital and original to be kept in record by ESIC while informing Tie-up Hospital about approval of claim.
      </p>
    </div>
    
    </div> <!-- Close container-fluid -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>
<ul class="filetrees" id="browser">
<?php //echo'sssssssss';pr($orderCategories);exit;
$lastOrderCategory = '';
foreach($orderCategories as $orderCategory){
	if(empty($lastOrderCategory)){
		echo '<li class="collapsable dataSetFolder"><div class="hitarea collapsable-hitarea"></div><span class="folder" id="folder'.$orderCategory["OrderCategory"]["id"].'">'.$orderCategory["OrderCategory"]["order_description"].'</span>';
	}else {if(!empty($orderCategory) && ($lastOrderCategory != $orderCategory['OrderCategory']['order_description'])){
		echo '</li><li class="collapsable dataSetFolder"><div class="hitarea collapsable-hitarea"></div><span class="folder" id="folder'.$orderCategory["OrderCategory"]["id"].'">'.$orderCategory["OrderCategory"]["order_description"].'</span>';
	}
}
	
?>	
		<ul class="innerOrderSet" id="ChildOrderSet_<?php echo $orderCategory['OrderCategory']['id'];?>">
		<?php foreach($orderCategory['OrderDataMaster'] as $orderData)?>
				<li class="last serviecSelectableInput"><span class="orderSelectable" id="<?php echo $orderData["id"];?>_serviecSelectable_<?php echo $orderData['id'];?>"><?php echo $orderData['name'];?>
				<input type="hidden" id="OrderCategory_id_<?php echo $orderCategory['OrderCategory']['id'];?>" value="<?php echo $orderCategory['OrderCategory']['id'];?>">
				<input type="hidden" id="OrderDataMaster_id_<?php echo $orderData['id'];?>" value="<?php echo $orderData['id'];?>">
				<input type="hidden" id="serviecSelectable__name_<?php echo $orderData['name'];?>" value="<?php echo $orderData['name'];?>">
				</span>
				</li>
			</ul>
			
		
<?php 
	$lastOrderCategory = $orderCategory['OrderCategory']['order_description'];
} ?>		
		
	</ul>
<?php
echo $this->Html->script(array('jquery-1.5.1.min','jquery.fancybox-1.3.4','jquery.autocomplete'));
echo $this->Html->css(array('internal_style.css','order_set.css','jquery.fancybox-1.3.4.css','jquery.autocomplete.css'));
?>
<style>
*{
	margin: 0px;
	padding:0px;
	font-size: 12px;
}
li{
list-style: none;
list-style-type: none;
}
body{
	font-size: 11px;
	padding: 0px;
}
.table_format{
	padding: 0px;
}
.table_format tr:first-child td{
	border-right: 1px solid #fff;
	padding-top:2px;
	padding-bottom:2px;
}
.orderMainWrapper{
	width:100%;
	margin-top: 10px;
}
.leftMainWrapper{
	width:40%;
	padding-right:10px;
}
.rightMainWrapper{
	width:60%;
	padding-left:10px;
}
.folderAddSection{
	width: 100%;
}
.mainWrapperBorder{
	border-right: 5px solid #fff;
	
}
.innerTop{
	font-size: 13px;
}
.rightOrderAreaSection{
	border: 1px solid #fff; 
	min-height: 250px;
}
.orderArea{
	width:49%;
}
.middleOrderArea{
	width:1%;
	border-right: 1px solid #fff;
}
.filetrees li  {
	list-style: none;
	list-style-type: none;
	padding-left:3px;
	padding-bottom: 5px;
}
.innerOrderSet{
	padding-left: 10px;
	display:none;
}
.innerOrderSet li{
	padding-bottom: 10px;
	list-style: none;
	list-style-type: none;
}
.cllickedFolder{
	min-height: 250px;
	padding-top:10px;
}
.patientInfo{
	padding-bottom: 6px;
}
.highlight{
	background:none repeat scroll 0 0 #A1B6BD;
}
.highlightIcon{
	background:none repeat scroll 0 0 #A1B6BD;
}
.orderHighlight{
	color:#2D85E2;
}
fieldset {padding: 10px;border: 1px solid #fff;}
legend {padding: 2px;font-size: 13px;}
</style>


<table id="patientInfo" class="patientInfo" width="100%">

</table>
<table id="orderMainWrapper" class="orderMainWrapper" width="100%">

<tr>
<td class="leftMainWrapper" id="leftMainWrapper">
<table id="patientInfo" class="patientInfo" width="100%">
<tr><td>
<fieldset>
<legend>Diaggnosis (Problem) being Addressed this Visits</legend>
<div class="folderAddSection">
<table id="innerTop" class="innerTop" width="100%">
<tr>
<td>+</td>
<td>Add</td>
<td><---</br>---></td>
<td>Convert</td>
<td style="border-right: 1px solid #fff;">&nbsp;</td>
<td>Display:DropDown</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="table_format">
<tr style="" class="row_title">
		<td width="15%" valign="top" class="table_cell">&nbsp;</td>
		<td width="15%" valign="top" class="table_cell">&nbsp;</td>
		<td width="50%" valign="top" class="table_cell">Clinical Dx</td>
		<td width="20%" valign="top" class="table_cell" style="border:none">Code</td>
</tr>
</table>
</div>
</fieldset>
</td></tr>
</table>
</td>
<td class="mainWrapperBorder">&nbsp;</td>
<td class="rightMainWrapper" id="rightMainWrapper" valign="top" align="left">
<table id="patientInfo" class="patientInfo" width="100%">
<tr class="">
		<td><?php echo __('Find');?>:</td>
		<td valign="middle" style="width:155px;"><?php echo $this->Form->input('searchKey',array('class' => 'textBoxExpnd','label'=>false,'type'=>'text','id'=>'searchKey','style'=>'width:150px'));?></td>
		<td  valign="middle" style="width:10px;"><?php echo $this->Html->image('icons/order_set/lookup.png',array('id'=>'lookup'));?></td>
		<td  valign="middle"><?php echo $this->Form->input('like', array('label'=> false,'id'=>'like','style'=>'width:150px','options'=>array('1'=>__('Contains'),'2'=>__('Starts With'))));?></td>
		<td  valign="middle"><?php echo $this->Form->input('advance', array('disabled' =>'disabled','label'=> false,'id'=>'advance','style'=>'width:150px','options'=>array('Advance Options'=>__('Advance Options'),'Starts With'=>__('Starts With'))));?></td>
		<td valign="middle" style="width:20px"><?php echo __('Type');?>:</td>
		<td  valign="middle"><?php echo $this->Html->image('icons/order_set/type.png',array('id'=>'type'));?></td>
		<td valign="middle"><?php echo $this->Form->input('patient_type', array('disabled' =>'disabled','label'=> false,'id'=>'patient_type','style'=>'width:150px','options'=>array('Inpatient'=>__('Inpatient'),'Ambulatory'=>__('Ambulatory'))));?></td>
</tr>
</table>
<table id="IconHub" class="patientInfo" width="100%">
<tr class="">
		<td valign="middle" style="width:25px;height:25px"><?php echo $this->Html->image('icons/order_set/up.png',array('id'=>'up'));?></td>
		<td valign="middle" style="width:25px;height:25px"><?php echo $this->Html->image('icons/order_set/home.png',array('id'=>'home'));?></td>
		<td  valign="middle" style="width:25px;height:25px"><?php echo $this->Html->image('icons/order_set/favourite.png',array('id'=>'favourite'));?></td>
		<td  valign="middle"><?php echo $this->Html->image('icons/order_set/arrow.png',array('id'=>'arrow'));?></td>
		<td  valign="middle"><?php echo $this->Html->image('icons/order_set/folder.png',array('id'=>'folder'));?></td>
		<td valign="middle" style="width:25px;height:25px"><?php echo $this->Html->image('icons/order_set/pages.png',array('id'=>'pages'));?></td>
		<td  valign="middle"><?php echo __('Folder');?>: <span id="currentFolder"></span></td>
		<td valign="middle"><?php echo __('Search within');?>: </td>
		<td  valign="middle"><?php echo $this->Form->input('search_within', array('label'=> false,'id'=>'search_within','style'=>'width:150px','options'=>array('All'=>__('All'),'favourite'=>__('Favourite'),'common'=>__('Common'),'home'=>__('Home'))));?></td>
		<td ><?php echo __('At Location');?>: </td>
		<td valign="middle"><?php echo $this->Form->input('at_location', array('label'=> false,'id'=>'at_location','style'=>'width:150px','options'=>$locations));?></td>
</tr>
</table>
<table id="rightOrderAreaSection" class="rightOrderAreaSection" width="100%">
<tr class="">
		<td valign="top" class="orderArea" align="left">
		<div class="revenue_panel" id="customOrderSet">
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
</div>
<div id="cllickedFolder" class="cllickedFolder"></div>
		</td>
		<td valign="top" class="middleOrderArea"><div>&nbsp;</div></td>
		<td valign="top" class="orderArea"><div>&nbsp;</div></td>
		
</tr>
</table>
</td>
</tr>
<tr><td></td><td></td><td style="padding-top:10px;" align="right"><?php echo $this->Html->link(__('Done'),'#',array('id'=>'done','class'=>'blueBtn','div'=>false,'label'=>false));?></td></tr>
</table>
<div>
<?php echo $this->Form->create('tests',array('controller'=>'Tests','action'=>'saveOrderSentence','type' => 'file','id'=>'saveOrderSentence','inputDefaults' => array(
		'label' => false,
		'div' => false,
		'error' => false,
		'legend'=>false,
		'fieldset'=>false
)
));
?>
<div id="finalOrderSet" class="finalOrderSet">
<input type="hidden" name="from" value="from" id="from">
</div>
<?php echo $this->Form->end();?>
</div>
<script>
var patientId = "<?php echo $patientId; ?>";
var timeoutReference = '';
var orderSubCategory = '';
var lastUniqueMasterOrderId = '';
var lastSelectedObj = '';
var lastSelectedFolderId = '';
var OrderSentenceajaxData = '';
var lastOrderCategoryId = 0;
var lastOrderDataMasterId = 0;
var lastClickedFolder = '';
var independentCounter = 0;
var lastSelectedOrderSentenceName = lastSelectedOrderName = '';
var orderSentenceUrl = "<?php echo $this->Html->url(array("controller" => 'Tests', "action" => "getOrderSentence","admin" => false)); ?>" ;
var selectOrderSentenceUrl = "<?php echo $this->Html->url(array("controller" => 'Tests', "action" => "selectOrderSentence","admin" => false)); ?>" ;
var saveOrderSentenceUrl = "<?php echo $this->Html->url(array("controller" => 'Tests', "action" => "saveOrderSentence","admin" => false)); ?>" ;
var saveOrderSentenceUrl = "<?php echo $this->Html->url(array("controller" => 'MultipleOrderSets', "action" => "ordersentence","admin" => false)); ?>" ;
var orderSetUrl = "<?php echo $this->Html->url(array("controller" => 'Tests', "action" => "getCustomOrderSet","admin" => false)); ?>" ;
var getPackageUrl = "<?php echo $this->Html->url(array("controller" => 'Tests', "action" => "getPackage","admin" => false)); ?>" ;
var getSearchUrl = "<?php echo $this->Html->url(array("controller" => 'Tests', "action" => "serachOrderSet","admin" => false)); ?>" ;
var chosenOrderSentenceId = 'none';
var counter = 0;
var selectedOrderSets = new Array();
var selectedMasterDataIds = new Array();
var selectedOrderSetsNew = new Array();
var lastModelName = '';

$( "#up" ).click(function() {
	$("#cllickedFolder ul").remove();
	$(".innerOrderSet").hide();
	$("#browser").show();
	
});

$( "#home" ).click(function() {
	$("#IconHub").find('td').removeClass('highlightIcon');
	$("#folder,#common,#arrow,#favourite,#home").removeClass('highlightIcon');
	$(this).parent().addClass('highlightIcon');
	lastClickedFolder = 'home';
	$("#search_within").val('home');
	getOrderSets('home');
	
});
$( "#folder" ).click(function() {
	$("#IconHub").find('td').removeClass('highlightIcon');
	$("#folder,#common,#arrow,#favourite,#home").removeClass('highlightIcon');
	$(this).parent().addClass('highlightIcon');
	lastClickedFolder = 'folder';
	$("#search_within").val('common');
	getOrderSets('common');
	
	
});
$( "#arrow" ).click(function() {
	$("#IconHub").find('td').removeClass('highlightIcon');
	$("#folder,#common,#arrow,#favourite,#home").removeClass('highlightIcon');
	$(this).parent().addClass('highlightIcon');
	lastClickedFolder = 'arrow';
	//$("#search_within").val('arrow');
	getOrderSets('');
});

$( "#favourite" ).click(function() {
	$("#IconHub").find('td').removeClass('highlightIcon');
	$("#folder,#common,#arrow,#favourite,#home").removeClass('highlightIcon');
	$(this).parent().addClass('highlightIcon');
	lastClickedFolder = 'favourite';
	$("#search_within").val('favourite');
	getOrderSets('favourite');
	
});

$("#search_within").change(function() {
	lastClickedFolder = $(this).val();
	if(lastClickedFolder == 'common'){
		$("#folder,#common,#arrow,#favourite,#home").removeClass('highlightIcon');
		$("#folder").addClass('highlightIcon');
	}else
	if(lastClickedFolder == 'All'){
		$("#folder,#common,#arrow,#favourite,#home").removeClass('highlightIcon');
		$("#IconHub").find('td').removeClass('highlightIcon');
	}else{
		$("#folder,#common,#arrow,#favourite,#home").removeClass('highlightIcon');
		$("#"+lastClickedFolder).addClass('highlightIcon');
	}
});

$(".collapsable").live('click', function() {
	var selectedFolder =  $(this).find('>span').attr('id');
	var name = lastSelectedFolderId =$(this).find('ul:first').attr('id');
	$("#browser").hide();
	$("#cllickedFolder").append('<ul id="'+name+'_new" class="innerOrderSet">'+$("#"+name).html()+'</ul>');
	$(".innerOrderSet").show();
	highlightSelectedOrders('searchEnter');
});

$(".orderSelectable").live('click', function() {
	var name=$(this).find('input:hidden').eq(1).val();
	var id = $(this).find('input:hidden').eq(1).attr('id');
	lastOrderDataMasterId = $(this).find('input:hidden').eq(1).val();
	lastOrderCategoryId = $(this).find('input:hidden').eq(0).val();
	lastSelectedOrderName = $(this).find('input:hidden').eq(2).val();
	lastUniqueMasterOrderId = $(this).attr('id');
	lastSelectedObj = this;
	var _this = $(this); // copy of this object for further usage
	getOrderSentences(id);
});

$("#done").live('click', function() {
	if(httpRequestSaveOrderSet) httpRequestSaveOrderSet.abort();
	var formData = $("#saveOrderSentence").serialize();
	var httpRequestSaveOrderSet = $.ajax({
		  beforeSend: function(){
			  //loading(); // loading screen
		  },
	      url: saveOrderSentenceUrl ,
	      context: document.body,
	      data : formData, 
	      type: "POST",
	      success: function(data){ 
		      if(data == true){
		      	$("#finalOrderSet").html('');
		      	parent.$.fancybox.close();
		      }
	    	  //alert(data);
	    	  
	    	 
		  },
		  error:function(){
				alert('Please try again');
				
			  }
	});
});

function showPrevSelectedSets(nameId,orderMasterId,name,orderCategoryId,ModelName){
	$("#cllickedFolder").append($('<ul>').attr('id',nameId + '_'+ orderMasterId + '_new').attr('class','innerOrderSet'));
	$("#"+ nameId + '_'+ orderMasterId + '_new').append($('<li>').
	        attr('class', 'serviecSelectableInput').append($('<span>').attr('id', name.replace(/\s/g, '_')+'_serviecSelectable_'+name.replace(/\s/g, '_'))
	        		.attr('class', 'orderSelectable').text(name)
	  .append($('<input>').
	        attr('type', 'hidden').attr('value', orderCategoryId).attr('id', 'OrderCategory_id_'+orderCategoryId))
	  .append($('<input>').
	        attr('type', 'hidden').attr('value', orderMasterId).attr('id', 'OrderDataMaster_id_'+orderMasterId))
	  .append($('<input>').
	        attr('type', 'hidden').attr('value', name).attr('id', 'serviecSelectable__name_'+name.replace(/\s/g, '_')))
	        ));
}

function createUL(lastSearchedData,checkEnterKey,lastSelectedOrderSetItem){
	var serachedData = lastSearchedData.split("\n");
	serachedData.shift();
	serachedData.pop();
	
	var SelectedItemArr = lastSelectedOrderSetItem.split("    ");
	SelectedItemIdArr = SelectedItemArr[1].split("|");
	$("#cllickedFolder ul").remove();
	var resLength = serachedData.length;
	resLength = resLength;// -1;
	//checkEnterKey 
	if(checkEnterKey == 1){
		for(var i = 0; i< resLength; i++){
			var expArray = serachedData[i].split("    ");
			if(expArray === undefined) continue;
			if(expArray[1] === undefined) continue;
			
			var idArray = expArray[1].split("|");
			var orderMasterId = idArray[1].replace ( /[^\d.]/g, '' );
			var orderCategoryId = idArray[0].replace ( /[^\d.]/g, '' );
			var name = '';
			if(orderMasterId != '0' && orderCategoryId != '0' && expArray[0] !== undefined && expArray[0] != ''){
				var nameId='none';
				if(expArray[0] !== undefined){
					var isFound = expArray[0].indexOf(SelectedItemArr[0]);
					if(isFound != -1){
						if(orderMasterId == ''){ 
							var ModelName = SelectedItemIdArr[1];
							lastModelName = ModelName;
						}	
						else {
							ModelName = '';
							lastModelName = ModelName;
						}
						showPrevSelectedSets(nameId,orderMasterId,expArray[0],orderCategoryId,ModelName);
					$("#" + nameId + '_'+ orderMasterId + '_new').show();
					
					independentCounter++;
				}
				$("#browser").hide();
				$(".innerOrderSet").show();
				highlightSelectedOrders('searchEnter');
			}
			
		}
	  }
	}else{
		var orderMasterId = SelectedItemIdArr[1].replace ( /[^\d.]/g, '' );
		var orderCategoryId = SelectedItemIdArr[0].replace ( /[^\d.]/g, '' );
		lastSelectedOrderName = SelectedItemArr[0];
		lastOrderCategoryId = orderCategoryId;
		lastOrderDataMasterId = orderMasterId;
		if(orderMasterId != '0' && orderCategoryId != '0' && SelectedItemArr[0] !== undefined && SelectedItemArr[0] != ''){
			var nameId='none';
			if(orderMasterId == ''){
				var ModelName = SelectedItemIdArr[1];
				lastModelName = ModelName;
			}	
			else {
				ModelName = '';
				lastModelName = ModelName;
			}
			showPrevSelectedSets(nameId,orderMasterId,SelectedItemArr[0],orderCategoryId,ModelName);
			$("#" + nameId + '_'+ orderMasterId + '_new').show();
			
			$("#browser").hide();
			$(".innerOrderSet").show();
			highlightSelectedOrders('searchEnter');
		}
		
	}
	independentCounter++;
}

$("#searchKey").autocomplete("<?php echo $this->Html->url(array("controller" => "Tests", "action" => "serachOrderSet","",'',"",'null',"admin" => false,"plugin"=>false)); ?>", {
	width: 250,
	selectFirst: true,
	valueSelected:true,
	isOrderSet:true,
	showNoId:true,
	max:1000,
	extraParams: {
		lastClickedFolder: function() { return lastClickedFolder; }, 
		like: function() { return $("#like").val(); }, 
		location: function() { return $("#at_location").val(); }, 
		 },
	loadId : 'searchKey,searchId',
	onItemSelect:function(event, ui) {
		lastSelectedFolderId = '';
		createUL(lastSearchedData,checkEnterKey,lastSelectedOrderSetItem);
		lastSelectedOrderSetItem = '';
		checkEnterKey = 0;
		lastSearchedData = '';
	}
});



function openOrderSentenceSelect(id){
	var orderSubCategory = $("#"+id).val();
	$.fancybox({

		'width' : '60%',
		'height' : '80%',
		'autoScale' : true,
		'transitionIn' : 'fade',
		'transitionOut' : 'fade',
		'type' : 'iframe',
		'href' : selectOrderSentenceUrl + '/' + orderSubCategory
	});
}

function chosenOrderSentence(){
	//alert(chosenOrderSentenceId);
}

function buildOrders(){
	if(lastSelectedOrderName == 'none')
		lastSelectedOrderName = '';
	if(lastSelectedOrderSentenceName == 'none')
		lastSelectedOrderSentenceName = '';
	lastOrderDataMasterId = lastOrderDataMasterId.trim();
	
	var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
	if(numberRegex.test(lastOrderDataMasterId)) {
		var notNumber = true;
	}else{
		lastOrderDataMasterId = lastModelName; 
		var notNumber = false;
	}
	var isFound = $("#final_"+lastOrderDataMasterId).find('input:hidden').eq(0).val();
	if(isFound === undefined){
		if(lastOrderDataMasterId == 'Laboratory'){
			var type = 'lab';
		}
		if(lastOrderDataMasterId == 'Radiology'){
			var type = 'rad';
		}
		if(lastOrderDataMasterId == 'PharmacyItem'){
			var type = 'med';
		}
		if(notNumber == true){
			var type = 'other';
		}//lastSelectedOrderName
		if(notNumber === false){
			lastOrderDataMasterIdAppend = lastSelectedOrderName.replace(/\s/g, '_');
		}else{
			lastOrderDataMasterIdAppend = lastOrderDataMasterId;
		}
		$("#finalOrderSet").append($('<span>').attr('id','final_'+lastOrderDataMasterIdAppend).append($('<input>').
		        attr('type', 'hidden').attr('value', patientId).attr('name', 'PatientOrder['+counter+'][patient_id]'))
		  .append($('<input>').
		        attr('type', 'hidden').attr('value', lastSelectedOrderName).attr('name', 'PatientOrder['+counter+'][name]'))
		  .append($('<input>').
		        attr('type', 'hidden').attr('value', lastSelectedOrderSentenceName).attr('name', 'PatientOrder['+counter+'][sentence]')) 
		  .append($('<input>').
		        attr('type', 'hidden').attr('value', lastOrderCategoryId).attr('name', 'PatientOrder['+counter+'][order_category_id]')) 
		  .append($('<input>').
		        attr('type', 'hidden').attr('value', lastOrderDataMasterId).attr('name', 'PatientOrder['+counter+'][order_data_master_id]'))
		        .append($('<input>').
		        attr('type', 'hidden').attr('value', type).attr('name', 'PatientOrder['+counter+'][type]'))
		        );
		
		counter++;
		
		//$("#cllickedFolder ul").remove();//independentCounter
		if(lastSelectedFolderId == ''){
			
			//for(var i=0; i < independentCounter; i++){
				
				var pushItemName = 'none_' + lastOrderDataMasterId + '_new';
				//selectedOrderSets.push(pushItemName);
				selectedMasterDataIds.push(lastOrderDataMasterId);
				selectedOrderSetsNew.push(lastSelectedOrderName.replace(/\s/g, '_'));
				
			//}
		}else{
			var pushItemName = lastSelectedFolderId +'_new';
			selectedOrderSets.push(pushItemName);
			selectedOrderSetsNew.push(lastSelectedOrderName.replace(/\s/g, '_'));
		}
	}lastOrderDataMasterId = '';
	highlightSelectedOrders('searchEnter');
	
	
}

function highlightSelectedOrders(area){
	$.each(selectedOrderSets, function( index, value ) {
		$("#"+ value).find('span').addClass('orderHighlight');
	});
	var nameId = 'none';
	
	if(area == 'searchEnter'){
		$.each(selectedMasterDataIds, function( index, value ) {
			//$("#"+ nameId + '_'+ value + '_new').find('span').addClass('orderHighlight');
			var isFound = $("#final_"+value).find('input:hidden').eq(1).val();
			if(isFound !== undefined){
				isFound = isFound.replace(/\s/g, '_') + "_serviecSelectable_"+isFound.replace(/\s/g, '_');
				
				$("#"+ isFound).addClass('orderHighlight');
				isFound = undefined;
			}
		});
		
		
	}
	
	$.each(selectedOrderSetsNew, function( index, value ) {
			//$("#"+ nameId + '_'+ value + '_new').find('span').addClass('orderHighlight');
			var isFound = $("#final_"+value.replace(/\s/g, '_')).find('input:hidden').eq(1).val();
			if(isFound !== undefined){
				isFound = isFound.replace(/\s/g, '_') + "_serviecSelectable_"+isFound.replace(/\s/g, '_');
				
				$("#"+ isFound).addClass('orderHighlight');
				isFound = undefined;
			}
		});
	
}

function processOrderSentence(data,id){
	OrderSentenceajaxData = data;
	data = jQuery.parseJSON(data);
	var dataCount = data.count; 
	data = data.orderSentences;
	if(dataCount == 0){
		buildOrders();
	}else if(dataCount > 1){
		openOrderSentenceSelect(id);
	}
}

function getOrderSets(folder){
	$( "#up" ).trigger( "click" );
	if(folder == ''){
		folder = 'none';
	}
	if(httpRequestOrderSet) httpRequestOrderSet.abort();
		var httpRequestOrderSet = $.ajax({
			  beforeSend: function(){
				  //loading(); // loading screen
			  },
		      url: orderSetUrl + "/" + patientId + "/" + folder + "/" + $("#at_location").val(),
		      context: document.body,
		      success: function(data){ 
		    	  $("#customOrderSet").html(data);
		      },
			  error:function(){
					alert('Please try again');
					
				  }
		});
	
		//lastOrderSubCategory = orderSubCategory;
}

function getOrderSentences(id){
	var orderSubCategory = $("#"+id).val();
	if(httpRequest) httpRequest.abort();
	
		var httpRequest = $.ajax({
			  beforeSend: function(){
				  //loading(); // loading screen
			  },
		      url: orderSentenceUrl+"/"+orderSubCategory,
		      context: document.body,
		      success: function(data){ 
		    	  processOrderSentence(data,id)
		      },
			  error:function(){
					alert('Please try again');
					
				  }
		});
	
		lastOrderSubCategory = orderSubCategory;
}

</script>
<link href="Test/style.css" rel="stylesheet" type="text/css"/>
<?php  //echo $this->Html->css(array('jquery.fancybox-1.3.4.css','jquery.autocomplete.css'));      
echo $this->Html->script(array('expand.js'));
									?>
									<script src="http://code.jquery.com/ui/1.8.16/jquery-ui.js"></script>
<style>
#sortable1, #sortable2 {
    list-style-type: none;
    margin: 0; padding: 0;
    float: left; margin-right: 10px; 
}    
#sortable1 li, #sortable2 li { 
    margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 120px; 
}
.sortable1.list, .sortable2.list { 
    clear:both;
}

.expand a{

margin-left: 20px;
}


</style>
<div class="main_container">
	<div style="padding:0px;margin:0px;">
		<ul class="header_navigation">
			<li ><a href="#">My List </a></li>
			<li><a href="#">Patient search</a></li>
			<li><a href="#">ICU Summery</a></li>
			<li><a href="#">Meds Review</a></li>
			<li><a href="#">Vital Infusion(24hr)</a></li>
			<li><a href="#">I/O (7 Day)</a></li>
			<li><a href="#">Reset Presepective</a></li>
		</ul>
	</div>
	<div class="clear"></div>
	
	<div class="header sub_header row_title"  style="color:#fff"><h2>Fraiser, Brenden l. 38 years M </h2></div><div class="clear"></div>
	<div>
	<table width="100%" class="sub_header row_title">
	<tr>
		<td style="padding-left:20px;padding-right:20px;">Dose Weight</td>
		<td style="padding-left:20px;padding-right:20px;">Actual Weight</td>
		<td style="padding-left:20px;padding-right:20px;">Allergies</td>
	</tr>
	</table>
		
		
	</div>
	
<div class="clear"></div>

	<div class="main_div">
		<div class="left_div" >
			<div class="left_inner_leftdiv1" ><ul><li class="LabTherapyHead">Vitals, CV, Neuro, Infusion(12 Hr)</li>
			<li><img src="Test/scale.jpg" /><input type="button"  value="Reset"/></li></ul></div>
			
			<div class="left_inner_leftdiv2" >
			
			<div
	id="accordian" class="accordian">
	<ul>
	<li>
<h3 class="expand accordian-header-custom">Vitals Sign(24/12/2013)</h3>
<div class="inner_leftinner collapse ui-accordion"  >
				<div class="inner_first1"></div>
				<div class="inner_left1" >
					<ul >
						<li ><input type="checkbox" />T(axil)</li>
						<li ><input type="checkbox" />HR</li>
						<li ><input type="checkbox" />RR</li>
						<li ><input type="checkbox" />O2 Sat</li>
					</ul>
				</div>
				<div class="inner_right1" ><img src="Test/XYPlot1.jpg" /></div>
				
			</div>
			</li>
			<li>
<h3 class="expand accordian-header-custom">Hemodynamics(24/12/2013)</h3>
<div class="inner_leftinner collapse"  >
				<div class="inner_first1"></div><div class="inner_left1" >
					<ul >
						<li ><input type="checkbox" />CPP</li>
						<li ><input type="checkbox" />ICP</li>
						<li ><input type="checkbox" />CVP</li>
						
					</ul>
				</div>
				<div class="inner_right1" ><img src="Test/XYPlot1.jpg" /></div>
				
			</div>
			</li>
			<li>
			<h3 class="expand">Blood Pressure(24/12/2013)</h3>
<div class="inner_leftinner collapse"   >
				<div class=""></div>
				<div class="inner_leftinner3" >
					<ul >
						<li ><input type="checkbox" />CPP</li>
						<li ><input type="checkbox" />ICP</li>
						<li ><input type="checkbox" />CVP</li>
						
					</ul>
				</div>expand
				<div class="inner_right1" ><img src="Test/XYPlot1.jpg" /></div>
				
			</div>
		</li>
			<li>	
				<h3 class="expand">Vasoactive Infusion(24/12/2013)</h3>
<div class="inner_leftinner collapse"   >
				<div class="inner_first1"></div><div class="inner_left1" >
					<ul >
						<li ><input type="checkbox" />CPP</li>
						<li ><input type="checkbox" />ICP</li>
						<li ><input type="checkbox" />CVP</li>
						
					</ul>
				</div>
				<div class="inner_right1" ><img src="Test/XYPlot1.jpg" /></div>
				
			</div>
			</li>
			
</ul>
</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			</div>
		</div>

	<div class="right_div" >
	<div class="LabTherapyHead"><?php echo __('I/O (3 day)');?></div>
			<table width="100%" class="table_format" cellpadding="0" cellspacing="0" style="padding:0px;"> 
					<tr class="row_title"><td>&nbsp;</td><td>7/28</td><td>7/29</td><td>7/30</td><td>Range Total</td></tr>
					<tr class="row_gray"><td>New (mL)</td><td>18</td><td>19</td><td>18</td><td>18</td></tr>
					</table>
		<div class="right_inner2" >
			<div class="inner_right_inner1"><img src="Test/StCol3DSingleLine1.jpg" /></div>
			<div class="inner_right_inner2">
				<ul >
					<li ><a href="#">Continuous Infusion</a></li>
					<li ><a href="#">Medication</a></li>
					<li><a href="#">Oral intake</a></li>
					<li><a href="#">GI Intake</a></li>
					<li><a href="#">Tube Feeding</a></li>
					<li><a href="#">Net</a></li>
					<li><a href="#">Urine</a></li>
					<li><a href="#">Gi Tube OutPut</a></li>
				</ul>
			</div>
		</div>
		<div class="right_inner3" >
		<div class="inner_right_inner31 accordian"  ><div class="LabTherapyHead">Labs</div>
		<ul id="accordianLab" class="connectedSortable">
		<li id="none" class="">&nbsp;</li>
		<li id="labs" class="ui-state-highlight">
		<h3  class="expand"><?php echo __('Blood Gases(Last 2 in 24 hours)'); ?></h3>
		<div class="inner_leftinner collapse ui-accordion"  >
				<div class="inner_first1"></div>
				<div>
					<table width="100%" class="table_format" cellpadding="0" cellspacing="0">
					<tr class="row_title"><td class="table_cell">PH</td><td class="table_cell">20</td><td class="table_cell">25</td>
					<tr class="row_gray"><td class="table_cell">PH</td><td class="table_cell">10</td><td class="table_cell">11</td></tr>
					<tr><td class="table_cell">PO2</td><td class="table_cell">12</td><td class="table_cell">13</td></tr>
					<tr class="row_gray"><td class="table_cell">PCO2</td><td class="table_cell">14</td><td class="table_cell">15</td></tr>
					<tr><td class="table_cell">HCO3</td><td class="table_cell">16</td><td class="table_cell">17</td></tr>
					<tr class="row_gray"><td class="table_cell">BD</td><td class="table_cell">18</td><td class="table_cell">19</td></tr>
					</table>
				</div>
				
				
		</div>
		</li>
		<li id="chemistry" class="">
		<h3  class="expand"><?php echo __('Chemistry'); ?></h3>
		<div class="inner_leftinner collapse ui-accordion"  >
				<div class="inner_first1"></div>
				<div>
					<table width="100%" class="table_format" cellpadding="0" cellspacing="0">
					<tr class="row_title"><td class="table_cell">PH</td><td class="table_cell">20</td><td class="table_cell">25</td>
					<tr class="row_gray"><td class="table_cell">PH</td><td class="table_cell">10</td><td class="table_cell">11</td></tr>
					<tr><td class="table_cell">PO2</td><td class="table_cell">12</td><td class="table_cell">13</td></tr>
					<tr class="row_gray"><td class="table_cell">PCO2</td><td class="table_cell">14</td><td class="table_cell">15</td></tr>
					<tr><td class="table_cell">HCO3</td><td class="table_cell">16</td><td class="table_cell">17</td></tr>
					<tr class="row_gray"><td class="table_cell">BD</td><td class="table_cell">18</td><td class="table_cell">19</td></tr>
					</table>
				</div>
				
		</div>
		</li>
		
		</ul>
		</div>
		<div class="inner_right_inner31 accordian"  ><div class="LabTherapyHead">Respiratory Therapy (6 hr)</div>
		<ul id="accordianTherapy" class="connectedSortable">
		<li id="none1" class="">&nbsp;</li>
		<li id="respiratory" class="">
		<h3 class="expand"><?php echo __('Respiratory'); ?></h3>
		<div class="inner_leftinner collapse ui-accordion"  >
				<div class="inner_first1"></div>
				<div>
					<table width="100%" class="table_format" cellpadding="0" cellspacing="0">
					<tr class="row_title"><td class="table_cell">PH</td><td class="table_cell">20</td><td class="table_cell">25</td>
					<tr class="row_gray"><td class="table_cell">PH</td><td class="table_cell">10</td><td class="table_cell">11.3</td></tr>
					<tr><td class="table_cell">PO2</td><td class="table_cell">12</td><td class="table_cell">13</td></tr>
					<tr class="row_gray"><td class="table_cell">PCO2</td><td class="table_cell">14</td><td class="table_cell">15.2</td></tr>
					<tr><td class="table_cell">HCO3</td><td class="table_cell">16</td><td class="table_cell">17</td></tr>
					<tr class="row_gray"><td class="table_cell">BD</td><td class="table_cell">18</td><td class="table_cell">19</td></tr>
					</table>
				</div>
				
		</div>
		
		</li>
		<li id="ventilator" class="">
		<h3  class="expand"><?php echo __('Ventilator'); ?></h3>
		<div class="inner_leftinner collapse ui-accordion"  >
				<div class="inner_first1"></div>
				<div>
					<table width="100%" class="table_format" cellpadding="0" cellspacing="0">
					<tr class="row_title"><td class="table_cell">PH</td><td class="table_cell">20</td><td class="table_cell">25</td>
					<tr class="row_gray"><td class="table_cell">PH</td><td class="table_cell">10</td><td class="table_cell">11.3</td></tr>
					<tr><td class="table_cell">PO2</td><td class="table_cell">12</td><td class="table_cell">13</td></tr>
					<tr class="row_gray"><td class="table_cell">PCO2</td><td class="table_cell">14</td><td class="table_cell">15.2</td></tr>
					<tr><td class="table_cell">HCO3</td><td class="table_cell">16</td><td class="table_cell">17</td></tr>
					<tr class="row_gray"><td class="table_cell">BD</td><td class="table_cell">18</td><td class="table_cell">19</td></tr>
					</table>
				</div>
				
		</div>
		</li>
		<li id="vitalSigns" class="">
		<h3  class="expand">Vitals Sign(24/12/2013)</h3>
		<div class="inner_leftinner collapse ui-accordion"  >
				<div class="inner_first1"></div>
				<div>
					<table width="100%" class="table_format" cellpadding="0" cellspacing="0">
					<tr class="row_title"><td class="table_cell">PH</td><td class="table_cell">20.4</td><td class="table_cell">25</td>
					<tr class="row_gray"><td class="table_cell">PH</td><td class="table_cell">10</td><td class="table_cell">11</td></tr>
					<tr><td class="table_cell">PO2</td><td class="table_cell">12</td><td class="table_cell">13</td></tr>
					<tr class="row_gray"><td class="table_cell">PCO2</td><td class="table_cell">14.4</td><td class="table_cell">15.2</td></tr>
					<tr><td class="table_cell">HCO3</td><td class="table_cell">16</td><td class="table_cell">17</td></tr>
					<tr class="row_gray"><td class="table_cell">BD</td><td class="table_cell">18</td><td class="table_cell">19</td></tr>
					</table>
				</div>
				
		</div>
		</li>
		</ul>
		</div>
		</div>
	</div>
</div>

</div>
<div class="accordianLab list"></div>
<div class="accordianTherapy list"></div>
 <script>

	
 $(function() {
	    $(".accordian h3.expand").toggler();
	    $(".accordian div.expand").expandAll();
	    $(".accordian div.other").expandAll({
	      expTxt : "[Show]", 
	      cllpsTxt : "[Hide]",
	      ref : "ul.collapse",
	      showMethod : "show",
	      hideMethod : "hide"
	    });
	    $(".accordian div.post").expandAll({
	      expTxt : "[Read this entry]", 
	      cllpsTxt : "[Hide this entry]",
	      ref : "div.collapse", 
	      localLinks: "p.top a"    
	    });    
	});
 
 $( document ).ready(function() {
	 $(".collapse").css('display','block');

		    
		});
 
 $( "#accordianLab, #accordianTherapy" ).sortable({
	    connectWith: ".connectedSortable",
	    stop: function(event, ui) {
	        $('.connectedSortable').each(function() {
	            result = "";
	            //alert($(this).sortable("toArray"));
	            $(this).find("li").each(function(){
	                result += $(this).text() + ",";
	            });
	            $("."+$(this).attr("id")+".list").html(result);
	        });
	    }
	});

 /*
$(function() {
	$('#accordion').accordion({
	    collapsible:true,

	    beforeActivate: function(event, ui) {
	         // The accordion believes a panel is being opened
	        if (ui.newHeader[0]) {
	            var currHeader  = ui.newHeader;
	            var currContent = currHeader.next('.ui-accordion-content');
	         // The accordion believes a panel is being closed
	        } else {
	            var currHeader  = ui.oldHeader;
	            var currContent = currHeader.next('.ui-accordion-content');
	        }
	         // Since we've changed the default behavior, this detects the actual status
	        var isPanelSelected = currHeader.attr('aria-selected') == 'true';

	         // Toggle the panel's header
	        currHeader.toggleClass('ui-corner-all',isPanelSelected).toggleClass('accordion-header-active ui-state-active ui-corner-top',!isPanelSelected).attr('aria-selected',((!isPanelSelected).toString()));

	        // Toggle the panel's icon
	        currHeader.children('.ui-icon').toggleClass('ui-icon-triangle-1-e',isPanelSelected).toggleClass('ui-icon-triangle-1-s',!isPanelSelected);

	         // Toggle the panel's content
	        currContent.toggleClass('accordion-content-active',!isPanelSelected)    
	        if (isPanelSelected) { currContent.slideUp(); }  else { currContent.slideDown(); }

	        return false; // Cancel the default action
	    }
	});
$('#accordion .ui-accordion-content').show();

});
*/


</script>
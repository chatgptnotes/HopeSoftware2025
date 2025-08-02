 <?php echo $this->Html->script(array('expand.js'));?>
<?php
echo $this->Html->css(array('drag_drop_accordian.css'));
echo $this->Html->script(array('jquery-1.9.1.js','jquery-ui-1.10.2.js'));
?>
<style>
.pointer{
	cursor: pointer;
}
.ui-widget-content {
	color: #fff;
	font-size:13px;
}
 .light:hover {
background-color: #F7F6D9;
text-decoration:none;
    color: #000000; 
}
.light td{ font-size:13px;}
.patientHub .patientInfo .heading {
float: left;
width: 121px !important;
}
</style>
<script>
var currTab = "<?php echo $this->request->params['pass']['1']; ?>" ;
var sbarURL =  "<?php echo $this->Html->url(array("controller" => 'PatientsTrackReports', "action" => "sbar",$patientId,"admin" => false)); ?>" ;
  $(document).ready(function () {
		$(".drmhope-tab").click(function(){  
	        	var tabClicked = $("#"+this.id).html();
		         $(location).attr('href',sbarURL+'/'+tabClicked);
		});
		
		$("#tabs li").removeClass("ui-tabs-active");
        $("#tabs li").removeClass("ui-state-active");
        $("#"+currTab).addClass("ui-tabs-active");
        $("#"+currTab).addClass("ui-state-active");
        
	  $( "#tabs" ).tabs({
	    beforeLoad: function( event, ui ) {
	     // alert("sdgsgdsgd");
	      //event.preventDefault();
	      if(ui.jqXHR){
	    	  ui.jqXHR.abort();
	      }
	      //return;
	    }
	  });
	});
  </script>
  <script>

var matched, browser;

jQuery.uaMatch = function( ua ) {
    ua = ua.toLowerCase();

    var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
        /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
        /(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
        /(msie) ([\w.]+)/.exec( ua ) ||
        ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
        [];

    return {
        browser: match[ 1 ] || "",
        version: match[ 2 ] || "0"
    };
};

matched = jQuery.uaMatch( navigator.userAgent );
browser = {};

if ( matched.browser ) {
    browser[ matched.browser ] = true;
    browser.version = matched.version;
}

// Chrome is Webkit, but Webkit is also Safari.
if ( browser.chrome ) {
    browser.webkit = true;
} else if ( browser.webkit ) {
    browser.safari = true;
}

jQuery.browser = browser;
</script>
  <style>
* {
	padding: 0px;
	margin: 0px;
}
.td_add img{float:right;padding-right: 15px;}
.header_navigation {
	width: 100%;
	padding: 0px;
	margin: 0px;
	border: px;
	height: 20px;
}

.header_navigation li {
	border: none;
	width: 18%
}

.mainInpatientSummaryWrapper {
	width: 100%;
	padding: 5px;
	border: 1px solid #EEEEEE;
	height: auto;
}

.mainul {
	
}

.mainul li {
	display: inline;
	width: 100%;
	list-style-type: none;
	list-style: none;
	padding-left: 10px;
}

.
.onelineli {
	width: 100%;
}

.onelineli li {
	display: inline;
	list-style-type: none;
	list-style: none;
	line-height: 0px;
	border-bottom: 1px thin #fff;
}

.textalign {
	text-align: left;
}

#talltabs-blue {
	border-top: 6px solid #8A9C9C;
	clear: left;
	float: left;
	font-family: Georgia, serif;
	overflow: hidden;
	padding: 0;
	width: 100%;
}

#talltabs-blue ul { /*  left: 50%; */
	list-style: none outside none;
	margin: 0;
	padding: 0;
	position: relative;
	text-align: center;
}

#talltabs-blue ul li {
	display: block;
	float: left;
	list-style: none outside none;
	margin: 0;
	padding: 0;
	position: relative;
	/* right: 50%;*/
}

#talltabs-blue ul li a {
	background: none repeat scroll 0 0 #8A9C9C;
	color: #FFFFFF !important;
	display: block;
	float: left;
	margin: 0 1px 0 0;
	padding: 8px 10px 6px;
	text-decoration: none;
}

#talltabs-blue ul li a:hover {
    background:#DDDDDD;
	color:#31859C !important;
}
.dragbox-content span {
    font-size: 13px;
}
.dragbox-content a {
    font-size: 13px;
}
#talltabs-blue ul li.active a,#talltabs-blue ul li.active a:hover {
	/*padding: 30px 10px 6px;*/
	background:#DDDDDD;
	color:#31859C !important;
}
</style>
 <?php 
	echo $this->Html->css(array('tooltipster.css'));
	echo $this->Html->script(array('jquery.tooltipster.min.js'));
?>
<div class="inner_title">
	<h3>
		<?php echo __('Add Progress Notes '); ?>
	</h3>

</div>
<?php echo $this->element('patient_information');  ?>
<div class="clear">&nbsp;</div>
<?php 
$lastColumn = '';
foreach($columns as $key =>$column) {


	if(!empty($lastColumn) && ($lastColumn != trim($column['Widget']['column_id']))){
		
		echo '</div></div>';
		if($column['Widget']['column_id'] == '3')
			$float = 'float:right;';
		else $float = 'float:left;';

		echo '<div id="mainColumn'.$column['Widget']['column_id'].'" class="column" style="width:32%;'.$float.'">';
		echo '<div id="mainColumn'.$column['Widget']['column_id'].'" class="columnInternal">';
	}else if(empty($lastColumn)){

		echo '<div id="mainColumn'.$column['Widget']['column_id'].'" class="column" style="width:34%">';
		echo '<div id="column'.$column['Widget']['column_id'].'" class="columnInternal">';
	}

	$boxHtml =  '<div class="dragbox" id="item'.$column['Widget']['id'].'" >';
	$boxHtml .= '<h2><div style="display:inline" >'.$column['Widget']['title'].'</div><span style="padding-left:30px; font-size:10px">{{recordCount}}</span></h2>';
	if($column['Widget']['collapsed'] == '1'){
		$collapsedDiv = 'style="display:none;"';
	}else{
		$collapsedDiv = 'style="display:block;"';
	}
	$boxHtml .= '<div class="dragbox-content" '.$collapsedDiv.'>';
	 
	switch (strtolower($column['Widget']['title'])) {
		case 'vitals':
			echo vitals($variable,$boxHtml);
			break;
		case 'chief complaints':
			echo chiefComplaints($variable,$boxHtml);
			break;
		case 'subjective':
			echo subjective($variable,$boxHtml);
			break;
		case 'objective':
			echo objective($variable,$boxHtml);
			break;
		case 'assessment':
			echo assessment($variable,$boxHtml);
			break;
		case 'investigation':
			echo investigation($variable,$boxHtml);
			break;
		case 'implants':
			echo implants($variable,$boxHtml);
			break;
		case 'treatment advised':
			echo treatmentAdvised($variable,$boxHtml);
			break;
		case 'pre operative note':
			echo preOperativeNote($variable,$boxHtml);
			break;
		case 'description of surgery':
			echo descriptionOfSurgery($variable,$boxHtml);
			break;
		case 'post operative note':
			echo postOperativeNote($variable,$boxHtml);
			break;
		case 'procedure performed':
			echo procedurePerformed($variable,$boxHtml);
			break;
		case 'plan':
			echo plan($variable,$boxHtml);
			break;
		}

	$lastColumn = $column['Widget']['column_id'];
	$userId = $column['Widget']['user_id'];
	$screenApplicationName = $column['Widget']['application_screen_name'];
}?>
</div>
<?php 
function vitals($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function chiefComplaints($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function subjective($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function objective($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function assessment($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function investigation($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function implants($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function treatmentAdvised($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function preOperativeNote($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function descriptionOfSurgery($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function postOperativeNote($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function procedurePerformed($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}
function plan($variable,$boxHtml){
	$boxHtml = str_replace("{{recordCount}}","",$boxHtml);
	$quality_measuresHtml = $boxHtml;
	$quality_measuresHtml.='</div></div>';
	return $quality_measuresHtml ;
}

?>

<div class="clear"></div>
<!-- </div> -->
<div class="clear"></div>
<div>
	<input type="hidden" name="user_id" id="user_id"
		value="<?php echo $this->Session->read('userid'); ?>"> <input
		type="hidden" name="screen_application_name"
		id="screen_application_name"
		value="<?php echo $screenApplicationName; ?>">
</div>
<script type="text/javascript">
function expandCollapseAll(id){
	if(id=='collapse_id'){//dragbox-content
		$(".dragbox-content").css('display','none'); 
		$('#expand_id').removeClass('active');
		$('#collapse_id').addClass('active');
	}else{
		$(".dragbox-content").css('display','block');
		$('#expand_id').addClass('active');
		$('#collapse_id').removeClass('active');
	}
	
}
$(function(){  
    $('.dragbox')  
    .each(function(){  
        $(this).hover(function(){  
            $(this).find('h2').addClass('collapse');  
        }, function(){  
        $(this).find('h2').removeClass('collapse');  
        })  
        .find('h2').hover(function(){  
            $(this).find('.configure').css('visibility', 'visible');  
        }, function(){  
            $(this).find('.configure').css('visibility', 'hidden');  
        })  
        .click(function(){  
            $(this).siblings('.dragbox-content').toggle();  
            //Save state on change of collapse state of panel  
            updateWidgetData();  
        })  
        .end()  
        .find('.configure').css('visibility', 'hidden');  
    });  

    $('.dragbox_inner')  
    .each(function(){  
        $(this).hover(function(){  
            $(this).find('h2').addClass('collapse');  
        }, function(){  
        $(this).find('h2').removeClass('collapse');  
        })  
        .find('h2').hover(function(){  
            $(this).find('.configure').css('visibility', 'visible');  
        }, function(){  
            $(this).find('.configure').css('visibility', 'hidden');  
        })  
        .click(function(){  
            $(this).siblings('.dragbox-content_inner').toggle();  
            //Save state on change of collapse state of panel  
            updateWidgetData();  
        })  
        .end()  
        .find('.configure').css('visibility', 'hidden');  
    });  
    
    
   
    
    
    
      
    $('.columnInternal').sortable({  
        connectWith: '.columnInternal',  
        handle: 'h2',  
        cursor: 'move',  
        placeholder: 'placeholder',  
        forcePlaceholderSize: true,  
        opacity: 0.4,  
        start: function(event, ui){  
            //Firefox, Safari/Chrome fire click event after drag is complete, fix for that  
            //if($.browser.mozilla || $.browser.safari)   
                $(ui.item).find('.dragbox-content').toggle();  
        },  
        stop: function(event, ui){  
            ui.item.css({'top':'0','left':'0'}); //Opera fix  
            //if(!$.browser.mozilla && !$.browser.safari)  
                updateWidgetData();  
        }  
    })  
    .disableSelection();  
});  
  
function updateWidgetData(){  
    var items=[];  
    $('.columnInternal').each(function(){  
        var columnId=$(this).attr('id');  
        $('.dragbox', this).each(function(i){  
            var collapsed=0;  
            if($(this).find('.dragbox-content').css('display')=="none")  
                collapsed=1;  
            //Create Item object for current panel  
            var item={  
                id: $(this).attr('id'),  
                collapsed: collapsed,  
                order : i,  
                column: columnId,
                title: $('h2 div',this).html(), 
                user_id:$('#user_id').val(), 
                application_screen_name:$('#screen_application_name').val(),
                section:"<?php echo $section ;?>"
            };  
            //Push item object into items array  
            items.push(item);  
        });  
    });  
    //Assign items array to sortorder JSON variable  
    var sortorder={ items: items };  
    //Pass sortorder variable to server using ajax to save state  
    var ajaxUrl = "<?php echo $this->Html->url(array("controller" => 'PatientsTrackReports', "action" => "saveWidget","admin" => false)); ?>";
    $.post(ajaxUrl, 'data='+JSON.stringify(sortorder), function(response){  
        if(response=="success")  
            $("#console").html('<div class="success">Saved</div>').hide().fadeIn(1000);  
        setTimeout(function(){  
            $('#console').fadeOut(1000);  
        }, 2000);  
    });  
}
</script>
<script type="text/javascript">
	 $(document).ready(function() {
	 	$('.tooltip').tooltipster({
	 		interactive:true,
	 		position:"right",
	 	});

	 	//link on soap note TR
	 	$(".soap-link").click(function(){ 
		 	var temp='<?php echo $flag; ?>';
		 	splitted_var =  $(this).attr('id').split("_") ;
		 	patient_id = splitted_var[0];
		 	note_id = splitted_var[1];
		 	window.location.href = "<?php echo $this->Html->url(array('controller'=>'patients','action'=>"notesadd")) ?>"+"/"+patient_id+"/"+note_id+"/"+temp ;
	 	});
	 	$(".diagnosis-link").click(function(){ 
		 	var temp='<?php echo $flag; ?>';
		 	splitted_var =  $(this).attr('id').split("_") ;
		 	patient_id = splitted_var[0];
		 	note_id = splitted_var[1];
		 	window.location.href = "<?php echo $this->Html->url(array('controller'=>'patients','action'=>"notesadd")) ?>"+"/"+patient_id+"/"+note_id+"/"+temp ;
	 	});


	 	$("#clinical-summary").click(function(){
			$ .fancybox({
				'width' : '60%',
				'height' : '70%',
				'autoScale' : true,
				'transitionIn' : 'fade',
				'transitionOut' : 'fade',
				'type' : 'iframe',
				'href' : "<?php echo $this->Html->url(array("controller" => "ccda", "action" => "clinical_summary", $patient['Patient']['id'],$patient['Prson']['patient_uid'])); ?>"
			});
		}) ;

		$('#patient_permissions').click(function(){
			$ .fancybox({
				'width' : '60%',
				'height' : '70%',
				'autoScale' : true,
				'transitionIn' : 'fade',
				'transitionOut' : 'fade',
				'type' : 'iframe',
				'href' : "<?php echo $this->Html->url(array("controller" => "Patients", "action" => "patient_permissions", $patient['Patient']['id'])); ?>"
			});
		})


		
	 });
	 function getAllergiesAddEdit(){
			$.fancybox({
				'width'        : '70%',
				'height'       : '40%',
				'autoScale'    : true,
				'transitionIn' : 'fade',
				'transitionOut': 'fade',
				'type'         : 'iframe',
				'onComplete'   : function() {
									$("#allergies").css({
						 'top' : '20px',
					  'bottom' : 'auto',	
						});
					},
				     'onClosed': function() {   
									     parent.location.reload(true); 
									     },
				'href' : "<?php echo $this->Html->url(array("controller" => "Patients", "action" => "rx",$patientId)); ?>"
			});
		}
	 function getRxHistory(){
			$.fancybox({
				'width' : '70%',
				'height' : '100%',
				'autoScale' : true,
				'transitionIn' : 'fade',
				'transitionOut' : 'fade',
				'type' : 'iframe',
				'onComplete' : function() {
					$("#allergies").css({
						'top' : '20px',
						'bottom' : 'auto',
						
					});
				},
				'href' : "<?php echo $this->Html->url(array("controller" => "Patients", "action" => "rxhistory",$patientId,$patientUId)); ?>"

			});
		}

	 function getAllergies(){
			$.fancybox({
				'width' : '70%',
				'height' : '100%',
				'autoScale' : true,
				'transitionIn' : 'fade',
				'transitionOut' : 'fade',
				'type' : 'iframe',
				'onComplete' : function() {
					$("#allergies").css({
						'top' : '20px',

						'bottom' : 'auto',	
						
	});
				},
				'href' : "<?php echo $this->Html->url(array("controller" => "Patients", "action" => "allallergies",$patient['Patient']['id'],0,0,$patient['Patient']['patient_id'])); ?>"

			});
		}

	 $('.infomedication').on('click',function(){ 
			id = $(this).attr('id') ;
			drug_id = $(this).attr('drug_id') ;
			//alert(id);alert(drug_id);
			var medication_name=$(this).attr('name');
			//alert(medication_name);
			var name_med=medication_name.replace("/","~");
			var ajaxUrl = "<?php echo $this->Html->url(array("controller" => "patients", "action" => "infomedication")); ?>"; 
         
		    $.ajax({
			     type: 'POST',
			     url:  ajaxUrl  + '/' + drug_id,
			     dataType: 'html',
			     beforeSend:function(){ 
			    	// $('#'+id).html($("#loading-indicator").html(),5); 
			    	 inlineMsg(id,"loading",10); 
	    	     },
			     success: function(data){		
			    	  data = data.trim();	
			    	  	 
			    	  if(data != ''){
			    		  //inlineMsg(id,'');
			    		  var win=window.open(data, '_blank');
			    		  win.focus();
				      }else{
				    	  inlineMsg(id,$('#loading-text').html(),10); 
				    	 
				      }
			     },
				 error: function(message){
					  inlineMsg(id,$('#loading-text').html(),5); 	     
					   
			     }        
			});
		});
	
</script>

<?php
echo $this->Html->css(array('drag_drop_accordian.css'));    
echo $this->Html->script(array('jquery-1.9.1.js','jquery-ui-1.10.2.js'));
?>

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
	<div id="mainColumn1" class="column">
	<div class="mainColumnFirst" ><ul class="LabTherapyHead"><li >Vitals, CV, Neuro, Infusion(12 Hr)</li>
			<li><img src="Test/scale.jpg" /><input type="button"  value="Reset"/></li></ul></div>
	<div id="column1" class="columnInternal">
		<div class="dragbox" id="item1" >
			<h2>Vitals Sign(24/12/2013)</h2>
			<div class="dragbox-content" >
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum velit ultricies orci pharetra elementum. In massa mauris, varius sed tempus a, iaculis sed erat. Ut sollicitudin tellus mollis arcu laoreet semper. Suspendisse ut felis odio. Aliquam auctor, tortor sit amet suscipit elementum, nunc ante dictum lectus, ac accumsan justo nunc sed velit. Sed sollicitudin varius tortor vitae varius. Aliquam interdum, nisl consectetur laoreet commodo, metus massa sagittis nisl, non venenatis lacus mi nec tortor. Ut malesuada auctor dolor, id pulvinar est malesuada sed. Aliquam sed posuere orci. 
			</div>
		</div>
		<div class="dragbox" id="item2" >
			<h2><span class="configure" ><a href="#" >Configure</a></span>Hemodynamics(24/12/2013)</h2>
			<div class="dragbox-content" >
				Phasellus porttitor adipiscing lacus ac tempus. Vivamus gravida augue metus, eu cursus nisl. Etiam arcu eros, placerat sed rhoncus at, porta et elit. Aenean pharetra ante neque. Aenean id egestas orci. Suspendisse potenti. Nunc at magna leo, sed porta erat. Proin eget neque turpis, vel blandit massa. Donec vel tortor magna. Curabitur id nibh magna, nec hendrerit nibh. 
			</div>
		</div>
		<div class="dragbox" id="item3" >
			<h2>Handle 3</h2>
			<div class="dragbox-content" >
				Proin porttitor euismod condimentum. Integer suscipit nibh nec augue facilisis ut commodo nisi ornare. Nam sed mauris vitae justo convallis placerat. Curabitur viverra, ipsum id volutpat sollicitudin, mi nisi condimentum nulla, nec dapibus velit libero eget orci. Nam purus lectus, imperdiet pharetra pulvinar ac, sodales sit amet sem. Ut vel mollis ante. Vivamus consectetur varius risus eu hendrerit. Sed scelerisque euismod leo, quis accumsan justo venenatis eu. Ut risus lorem, aliquet id fermentum nec, auctor ut enim. Ut pretium elementum turpis vel dignissim. 
			</div>
		</div>
	</div>
	</div>
	<div id="mainColumn2" class="column">
	<div class="mainColumnFirst"  ><ul><li class="LabTherapyHead">Vitals, CV, Neuro, Infusion(12 Hr)</li>
			<li><img src="Test/scale.jpg" /><input type="button"  value="Reset"/></li></ul></div>
	<div id="column2" class="columnInternal" >
		<div class="dragbox" id="item4" >
			<h2>Handle 4</h2>
			<div class="dragbox-content" >
				Nullam metus magna, tristique vel ultrices a, molestie quis dolor. Curabitur porta porta ullamcorper. Duis varius velit et dui auctor pretium bibendum urna gravida. Sed euismod dui in tellus euismod euismod. Nam convallis ornare fermentum. Aliquam libero augue, ullamcorper vitae lacinia at, vestibulum et risus. Praesent accumsan ultrices purus eu consequat. Phasellus posuere lobortis malesuada. Curabitur ac orci eu dui vulputate porttitor. Sed a urna et odio vulputate euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In volutpat, tortor eu dapibus vestibulum, risus metus eleifend ipsum, quis lobortis elit dolor vel ligula. Aliquam ultrices nunc in elit bibendum pharetra. Ut non ante sagittis arcu imperdiet posuere. Duis consectetur massa sit amet enim scelerisque consequat et eget magna. Curabitur tristique molestie sem quis vulputate. Sed eleifend urna neque. Nam placerat eros non augue consequat vestibulum. 
			</div>
		</div>
		<div class="dragbox" id="item5" >
			<h2>Handle 5</h2>
			<div class="dragbox-content" >
				Nam rhoncus sodales libero, et facilisis nisi volutpat et. Nullam tellus eros, consequat eget tristique ultricies, rhoncus vitae magna. Duis nec scelerisque orci. Nullam a enim est, et eleifend nunc. Proin dui eros, vulputate eget consectetur quis, ultrices ac sem. Nulla aliquam metus eu magna placerat placerat. Suspendisse eget tellus turpis, et ultricies nisi. Etiam in diam mi, sed tincidunt eros. Phasellus convallis aliquam arcu, vitae fringilla quam pharetra sed. In at augue at nibh placerat feugiat at id elit. Curabitur sit amet quam ut turpis molestie blandit in vel nulla. 
			</div>
		</div>
	</div>
	</div>
	
	<hr style="clear:both;" />
<p>
Demo Provided By: <a href="http://webdeveloperplus.com" title="Web Developer Plus - Ultimate Web Development & Design Resource" >Web 
Developer Plus</a></p>


<script type="text/javascript" >
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
		stop: function(event, ui){
			$(ui.item).find('h2').click();
			var sortorder='';
			$('.columnInternal').each(function(){
				var itemorder=$(this).sortable('toArray');
				var columnId=$(this).attr('id');
				sortorder+=columnId+'='+itemorder.toString()+'&';
			});
			//alert('SortOrder: '+sortorder);
			/*Pass sortorder variable to server using ajax to save state*/
		}
	})
	.disableSelection();
});
</script>
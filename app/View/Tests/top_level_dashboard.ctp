<?php //debug($yesterdayExpenses);pieSample

?>
<style>
.pie {
	background: url("<?php echo $this->webroot ?>/img/pieSample.png")
		no-repeat center 18px;
	cursor: pointer;
}
</style>
<div class="inner_title">
	<h3>
		<?php echo __('Top Level Dashboard', true); ?>
	</h3>
</div>
<div class='ht5'>&nbsp;</div>

<table align="center" width="100%">
	<tr>
		<td class="tdLabel" id="boxSpace"><?php echo __('Admission today');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>$todaysAdmissions,'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Occupancy snap shot (including overstay)');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>'','div'=>false,'label'=>false,'disabled'=>true));?></td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Service booking delay');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>'','div'=>false,'label'=>false,'disabled'=>true));?></td>
		<td rowspan="3"><?php echo $this->Html->image('pieSample.png',array('style'=>'height: 150px; float: right;'));?>
		</td>
	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace"><?php echo __('Personnel presence');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>'','div'=>false,'label'=>false,'disabled'=>true));?></td>
		<td align="left" colspan="4"><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>'','div'=>false,'label'=>false,'disabled'=>true));?></td>
	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace"><?php echo __('Revenue current - till date in month');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>$collectionTillDateInMonth['0']['paid_amount'],'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Till date in year');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>$collectionTillDateInYear['0']['paid_amount'],'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Cash collection currently in hospital');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>$collectionInHospital['0']['paid_amount'],'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace"><?php echo __('Yesterdays expenses - SALARY');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>$yesterdayExpenses['0']['paid_amount'],'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Electricity bill');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>'','div'=>false,'label'=>false,'disabled'=>true));?></td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Rent');?></td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>'','div'=>false,'label'=>false,'disabled'=>true));?></td>
		<td class="tdLabel" id="boxSpace"><?php echo __('EMI');?> <?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>'','div'=>false,'label'=>false,'disabled'=>true));?></td>
	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace"><?php echo __('Profit/Loss - yesterday');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>$yesterdayCollection['0']['paid_amount'] - $yesterdayExpenses['0']['paid_amount'],'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Till date in month');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>$collectionTillDateInMonth['0']['paid_amount'] - $expensesTillDateInMonth['0']['paid_amount'],'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Till date in year');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>$collectionTillDateInYear['0']['paid_amount'] - $expensesTillDateInYear['0']['paid_amount'],'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace" colspan="2"><?php echo $this->Html->image('bar.png',array('style'=>'height: 150px; float: right; width: 360px;'));?>
		</td>
		<td>&nbsp;</td>
		<td><?php echo $this->Html->image('horizontalBar.png',array('style'=>'height: 150px; float: right; width: 360px;'));?>
		</td>
	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace"><?php echo __('Cash in hand now');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>120000,'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>

	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace"><?php echo __('Exception report');?>
		</td>
		<td colspan="5">&nbsp;</td>
		<td rowspan="4"><table width="100%" cellspacing="1" cellpadding="0" border="0" class="tabularForm" style="clear:both">
				<tr>
					<th>search</th>
					<th>website</th>
					<th>contact person</th>
				</tr>
				<tr>
					<td>Mockup builder</td>
					<td><span style="color: #31859c !important;font-size: 13px;text-decoration: underline;">MB</span></td>
					<td>contact@drmhope.com</td>
				</tr>
				<tr>
					<td>FPS component</td>
					<td><span style="color: #31859c !important;font-size: 13px;text-decoration: underline;">FPS</span></td>
					<td>contact@fps.com</td>
				</tr>
			</table></td>
	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace">&nbsp;</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Unresolved approvals/authorizations');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>2,'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Equipment requiring maintanance more than 2 times within last 30 days');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>4,'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace">&nbsp;</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Credit realization delays');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>3,'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Process delays');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>6,'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
	</tr>
	<tr>
		<td class="tdLabel" id="boxSpace">&nbsp;</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Late coming continuously for more than 3 days');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>3,'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
		<td class="tdLabel" id="boxSpace"><?php echo __('Personnel absent without leave for more than 2 days');?>
		</td>
		<td><?php echo $this->Form->input('',array('type'=>'text','style'=>'text-align:center;font-weight: bold;width:100px',
				'value'=>5,'div'=>false,'label'=>false,'disabled'=>true));?>
		</td>
	</tr>
</table>


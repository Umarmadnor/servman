<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rack_num')); ?>:</b>
	<?php echo CHtml::encode($data->rack_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('server_temp')); ?>:</b>
	<?php echo CHtml::encode($data->server_temp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room_temp')); ?>:</b>
	<?php echo CHtml::encode($data->room_temp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />

	*/ ?>

</div>
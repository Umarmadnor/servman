<?php
$this->breadcrumbs=array(
	'Racks Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RacksLog', 'url'=>array('index')),
	array('label'=>'Create RacksLog', 'url'=>array('create')),
	array('label'=>'Update RacksLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RacksLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RacksLog', 'url'=>array('admin')),
);
?>

<h1>View RacksLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'userid',
		'racksid',
		'datetime',
	),
)); ?>

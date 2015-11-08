<?php
$this->breadcrumbs=array(
	'Racks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Racks', 'url'=>array('index')),
	array('label'=>'Create Racks', 'url'=>array('create')),
	array('label'=>'Update Racks', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Racks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Racks', 'url'=>array('admin')),
);
?>

<h1>View Racks #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rack_num',
		'comments',
		'server_temp',
		'room_temp',
		'name',
		'status',
		'datetime',
	),
)); ?>

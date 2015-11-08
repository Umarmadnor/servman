<?php
$this->breadcrumbs=array(
	'Login Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LoginLog', 'url'=>array('index')),
	array('label'=>'Create LoginLog', 'url'=>array('create')),
	array('label'=>'Update LoginLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LoginLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LoginLog', 'url'=>array('admin')),
);
?>

<h1>View LoginLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'logintime',
		'userid',
	),
)); ?>

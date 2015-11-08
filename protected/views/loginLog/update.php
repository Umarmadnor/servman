<?php
$this->breadcrumbs=array(
	'Login Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LoginLog', 'url'=>array('index')),
	array('label'=>'Create LoginLog', 'url'=>array('create')),
	array('label'=>'View LoginLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LoginLog', 'url'=>array('admin')),
);
?>

<h1>Update LoginLog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
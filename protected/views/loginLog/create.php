<?php
$this->breadcrumbs=array(
	'Login Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LoginLog', 'url'=>array('index')),
	array('label'=>'Manage LoginLog', 'url'=>array('admin')),
);
?>

<h1>Create LoginLog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Racks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Racks', 'url'=>array('index')),
	array('label'=>'Manage Racks', 'url'=>array('admin')),
);
?>

<h1>Create Racks</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Racks'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Racks', 'url'=>array('index')),
	array('label'=>'Create Racks', 'url'=>array('create')),
	array('label'=>'View Racks', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Racks', 'url'=>array('admin')),
);
?>

<h1>Update Racks <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
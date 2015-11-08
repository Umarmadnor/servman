<?php
$this->breadcrumbs=array(
	'Racks Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RacksLog', 'url'=>array('index')),
	array('label'=>'Create RacksLog', 'url'=>array('create')),
	array('label'=>'View RacksLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RacksLog', 'url'=>array('admin')),
);
?>

<h1>Update RacksLog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
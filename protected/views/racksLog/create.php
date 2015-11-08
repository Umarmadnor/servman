<?php
$this->breadcrumbs=array(
	'Racks Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RacksLog', 'url'=>array('index')),
	array('label'=>'Manage RacksLog', 'url'=>array('admin')),
);
?>

<h1>Create RacksLog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
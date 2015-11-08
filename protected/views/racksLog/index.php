<?php
$this->breadcrumbs=array(
	'Racks Logs',
);

$this->menu=array(
	array('label'=>'Create RacksLog', 'url'=>array('create')),
	array('label'=>'Manage RacksLog', 'url'=>array('admin')),
);
?>

<h1>Racks Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

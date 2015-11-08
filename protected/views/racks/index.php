<?php
$this->breadcrumbs=array(
	'Racks',
);

$this->menu=array(
	array('label'=>'Create Racks', 'url'=>array('create')),
	array('label'=>'Manage Racks', 'url'=>array('admin')),
);
?>

<h1>Racks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Login Logs',
);

$this->menu=array(
	array('label'=>'Create LoginLog', 'url'=>array('create')),
	array('label'=>'Manage LoginLog', 'url'=>array('admin')),
);
?>

<h1>Login Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

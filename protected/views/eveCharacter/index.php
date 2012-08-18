<?php
$this->breadcrumbs=array(
	'Eve Characters',
);

$this->menu=array(
	array('label'=>'Create eveCharacter', 'url'=>array('create')),
	array('label'=>'Manage eveCharacter', 'url'=>array('admin')),
);
?>

<h1>Eve Characters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

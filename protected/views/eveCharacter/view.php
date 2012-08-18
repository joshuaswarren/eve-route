<?php
$this->breadcrumbs=array(
	'Eve Characters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List eveCharacter', 'url'=>array('index')),
	array('label'=>'Create eveCharacter', 'url'=>array('create')),
	array('label'=>'Update eveCharacter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete eveCharacter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage eveCharacter', 'url'=>array('admin')),
);
?>

<h1>View eveCharacter #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'characterId',
		'corporationId',
		'name',
		'userId',
		'apiKey',
		'apiKeyId',
	),
)); ?>

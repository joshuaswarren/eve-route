<?php
$this->breadcrumbs=array(
	'Eve Characters'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List eveCharacter', 'url'=>array('index')),
	array('label'=>'Create eveCharacter', 'url'=>array('create')),
	array('label'=>'View eveCharacter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage eveCharacter', 'url'=>array('admin')),
);
?>

<h1>Update eveCharacter <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
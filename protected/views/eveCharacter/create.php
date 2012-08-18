<?php
$this->breadcrumbs=array(
	'Eve Characters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List eveCharacter', 'url'=>array('index')),
	array('label'=>'Manage eveCharacter', 'url'=>array('admin')),
);
?>

<h1>Create eveCharacter</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('characterId')); ?>:</b>
	<?php echo CHtml::encode($data->characterId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('corporationId')); ?>:</b>
	<?php echo CHtml::encode($data->corporationId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apiKey')); ?>:</b>
	<?php echo CHtml::encode($data->apiKey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apiKeyId')); ?>:</b>
	<?php echo CHtml::encode($data->apiKeyId); ?>
	<br />


</div>
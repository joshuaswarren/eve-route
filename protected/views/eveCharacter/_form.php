<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eve-character-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Character name is optional - enter your EVE API verification code and ID. Please use one API key per character.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textArea($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apiKey'); ?>
		<?php echo $form->textArea($model,'apiKey',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'apiKey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apiKeyId'); ?>
		<?php echo $form->textArea($model,'apiKeyId',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'apiKeyId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
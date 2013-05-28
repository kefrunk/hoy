<?php
/* @var $this ImagenController */
/* @var $model Imagen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagen-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<p><?php echo $form->labelEx($model,'image'); ?><p>
		<?php echo $form->fileField($model, 'image');?>
		<?php echo $form->error($model,'image'); ?></p>
		
	</div>
	
	<div class="row">
		<p>
		<p><?php echo $form->labelEx($model,'description'); ?><br>
		<?php echo $form->TextField($model, 'description');?></p>
		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Subir Imagen' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
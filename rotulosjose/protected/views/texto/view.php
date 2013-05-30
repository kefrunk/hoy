<?php
/* @var $this TextoController */
/* @var $model Texto */

$this->breadcrumbs=array(
	'Textos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Texto', 'url'=>array('index')),
	array('label'=>'Create Texto', 'url'=>array('create')),
	array('label'=>'Update Texto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Texto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Texto', 'url'=>array('admin')),
);
?>
<font color="black">
<h1>View Texto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'valor',
	),
)); ?>
</font>
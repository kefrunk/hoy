<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Imagenes', 'url'=>array('index')),
	array('label'=>'Subir Imagen', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#imagen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><font color="white">Administrador de imagenes</font></h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<font color="black">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'imagen-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'image',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<br></font>


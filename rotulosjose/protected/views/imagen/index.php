<?php
/* @var $this ImagenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imagens',
);

$this->menu=array(
	array('label'=>'Subir Imagen', 'url'=>array('create')),
	array('label'=>'Administrar Imagenes', 'url'=>array('admin')),
);
?>

<h1><font color="white">Imagens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</font>
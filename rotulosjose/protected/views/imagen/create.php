<?php
/* @var $this ImagenController */
/* @var $model Imagen */


$this->menu=array(
	array('label'=>'Lista de Imagenes', 'url'=>array('index')),
	array('label'=>'Administrar Imagenes', 'url'=>array('admin')),
);
?>

<h1><font color="white">Subir nueva Imagen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</font>










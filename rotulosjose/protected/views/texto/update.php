<?php
/* @var $this TextoController */
/* @var $model Texto */

$this->breadcrumbs=array(
	'Textos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Texto', 'url'=>array('index')),
	array('label'=>'Create Texto', 'url'=>array('create')),
	array('label'=>'View Texto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Texto', 'url'=>array('admin')),
);
?>
<font color="black">
<h1>Update Texto 
<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></font>
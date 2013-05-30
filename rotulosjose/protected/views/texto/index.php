<?php
/* @var $this TextoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Textos',
);

$this->menu=array(
	array('label'=>'Create Texto', 'url'=>array('create')),
	array('label'=>'Manage Texto', 'url'=>array('admin')),
);
?>
<font color="white">
<h1>Textos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</font>
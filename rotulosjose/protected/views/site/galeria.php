<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name;
?>


<div>
<?php
$this->widget('Galleria', array(
    'dataProvider' => $model->search(),
	'options' => array(//galleria options
        'transition' => 'fade',
		'imageCrop'=>false,
		'lightbox'=>true,
		'transitionSpeed' => 2000,
		 'imagePan'=>true,
		 'showInfo' =>true,
		 ),
	'srcPrefix' => 'upload/images/',
    'binding' => array(
	'imagePrefix' => '',
        'image' => 'image',
		'description' => 'description',
		'title' => 'f',
    ),
));
?>
</div>


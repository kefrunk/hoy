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
		'autoplay'=>5000,
		'imageCrop'=>true,
		'lightbox'=>true,
		'transitionSpeed' => 2000,
		 'imagePan'=>true,
		 'showInfo' =>false,
		 'showImagenav'=>false,
		'imageMargin'=>0,),
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


<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name;
?>

<style>
.galleria-container{background:none}
}
</style>
<div>
<?php
$this->widget('Galleria', array(
    'dataProvider' => $model->search(),
	'options' => array(//galleria options
        'transition' => 'fade',
		'autoplay'=>5000,
		'lightbox'=>true,
		'transitionSpeed' => 2000,
		 'imagePan'=>true,
		 'showInfo' =>false,
		 'showImagenav'=>false,
		 'imageCrop'=>true,),
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


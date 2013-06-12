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
		'autoplay'=>6000,
		'lightbox'=>true,
		'transitionSpeed' => 3000,
		 'showInfo' =>false,
		 'height'=>428,
		 'showImagenav'=>false,
		 'imageCrop'=>'portrait',),
	'srcPrefix' =>  Yii::app()->request->baseUrl.'/upload/images/',
    'binding' => array(
	'imagePrefix' => '',
        'image' => 'image',
		'description' => 'description',
		'title' => 'f',
    ),
));
?>
</div>


<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name;
?>

<style>
.galleria-container{background:none}
</style>
<div style="float:right;">
<?php
$this->widget('Galleria', array(
    'dataProvider' => $model->search(),
	'options' => array(//galleria options
        'transition' => 'fade',
		'width' => 800,
		'height' => 500,
		'thumbnails'=>'false',
		'autoplay'=>3000,
		'lightbox'=>'true',
		'showInfo'=>'false',),
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


<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="index">

<div class="container" id="page">

	<div id="header">

			<div id="mainmenu">
		
		
		
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Galeria', 'url'=>array('/fotos/index')),
				array('label'=>'Empresa', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		
		
		
		
	</div>
		
	</div><!-- header -->

	
	
	
	
	<!-- mainmenu -->
	
	<div class="maincontent_contacto">
		<?php echo $content; ?>
	</div>

	<div class="clear"></div>

	<div id="footer">
	<div id="dondestamos">
	<p>Rotulos Jose<br>
	Poligono Puente Alto, s/n<br>
	03433 Orihuela(Alicante)<br>
	Telefono:9234523<br>
	e-mail:info@rotulosjose.com</p>
	</div>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

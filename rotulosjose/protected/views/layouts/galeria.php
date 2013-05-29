<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />

<style>

body
{
	margin: 0;
	padding: 0;
	color: #555;
	font: normal 10pt Arial,Helvetica,sans-serif;
	background: #7c6a5b;
}

#mainmenu{
position:absolute;
 top:0px;
 right:0px;
 left:0px;
 height:100px;
 background-color: #100f99;
 background-image: url('/imgJose/antigrad.png');
}

#cuerpoPanel{
position:absolute;
 top:100px;
  overflow:scroll;
 left:120px;
 right:100px;
 bottom: 0px;
background: url('/imgJose/slogotr.png') right no-repeat #555555;
padding-left:40px;
color:#FFFFFF;
}

#leftPanel{
 position:absolute;
 top:100px;
 left:0;
 width:30px;
 bottom:88px;
background-color:#7c6a5b;
}



#footer{
 position:absolute;
 bottom:0;
 right:0;
 left:0;
 height:88px;
 background-color: #100f99;
 background-image: url('/imgJose/grad.png');
}


#dondestamos{
padding-left:15px;
 position:absolute;
 left:0;
 top:0px;
 height:80px;
 width:400px;
 color:#cccccc;
font-family:"Helvetica Neue", Arial, Helvetica, sans-serif;
font-size:17px;
text-align:left;
 background: #444499;
  border-style: solid;
 border-width: 2px;
 -moz-border-radius: 15px;
 border-radius: 15px;
  -webkit-border-radius: 15px;
}



</style>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="index">

<div id="mainmenu">
		<div id="Titulos">
		<img src="/imgJose/logo1.png"style="float:left;margin-left:50px;"/>
		</div>
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Inicio', 'url'=>array('/site/index')),
					array('label'=>'Galeria', 'url'=>array('/site/galeria'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Empresa', 'url'=>array('/site/about'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Imagenes', 'url'=>array('/imagen/admin'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Contacto', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); ?>
			
		
	</div><!-- header -->

	
	
	
	
	<!-- mainmenu -->
	
	<div id="cuerpoPanel">
		<?php echo $content; ?>
	</div>

<div id="cabeceraPanel"></div>
		
			
			
			
			
			
			
			</div><!-- page -->

</body>
</html>

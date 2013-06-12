<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />
	

<style>

body
{
	margin: 0;
	padding: 0;
	color: #555;
	font: normal 10pt Arial,Helvetica,sans-serif;
	background: #EFEFEF;
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

#garagenavagacion{
position:absolute;
 top:20px;
 right:40px;
}



#cuerpoPanel{
position:absolute;
 top:100px;
 left:270px;
 right:0;
 bottom: 88px;
background: url('/imgJose/slogo.png') right no-repeat #7c6a5b;
}
#leftPanel{
 position:absolute;
 top:100px;
 left:0;
 width:270px;
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
 top:50%;
 width:228px;
 margin:25px;
 color:#cccccc;
font-family:"Helvetica Neue", Arial, Helvetica, sans-serif;
font-size:13px;
font-weight:bold;
text-align:left;
 background: #444499;
 -moz-border-radius: 15px;
 border-radius: 15px;
}




</style>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	
<link href='<?php echo Yii::app()->request->baseUrl; ?>/css/style.css' rel='stylesheet' type='text/css' />
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.3.2.min.js" type="text/javascript"></script>
		
		<link href='<?php echo Yii::app()->request->baseUrl; ?>/css/garagedoor.css' rel='stylesheet' type='text/css' />
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/garagedoorjQuery.js" type="text/javascript"></script>
</head>

<body class="index">

<div id="mainmenu">
		<img src="/imgJose/logo1.png"style="float:left;margin-left:50px;"/>
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Inicio', 'url'=>array('/site/index')),
					array('label'=>'Galeria', 'url'=>array('/site/galeria'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Empresa', 'url'=>array('/site/about'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Imagenes', 'url'=>array('/imagen/admin'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Contacto', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Textos', 'url'=>array('/texto/admin'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); ?>
			
		
	</div>
	<div id="garagenavagacion">
	<div class='garagedoor' id='garagedoor'>		
					<div title='http://www.rotulosjose.com/site/index' class='item'>
						<div class='underlay'>
							Inicio
						</div>
						<img src='/imgJose/garage5.jpg' alt='' class='overlay' />
						<div class='mouse'><img src='<?php echo Yii::app()->request->baseUrl; ?>/images/nothing.gif' alt='' /> &nbsp;</div>
					</div>
					<div title='http://www.rotulosjose.com/site/galeria' class='item'>
						<div class='underlay'>
							Galeria
						</div>
						<img src='/imgJose/garage2.jpg' class='overlay' alt='' />
						<div class='mouse'><img src='<?php echo Yii::app()->request->baseUrl; ?>/images/nothing.gif' alt='' /> &nbsp;</div>
					</div>
					<div title='http://www.rotulosjose.com/site/about' class='item'>
						<div class='underlay'>
							Empresa
						</div>
						<img src='/imgJose/garage3.jpg' class='overlay' alt='' />
						<div class='mouse'><img src='<?php echo Yii::app()->request->baseUrl; ?>/images/nothing.gif' alt='' /> &nbsp;</div>
					</div>
					<div title='http://www.rotulosjose.com/site/contact' class='item'>
						<div class='underlay'>
							Contacto
						</div>
						<img src='/imgJose/garage4.jpg' class='overlay' alt='' />
						<div class='mouse'><img src='<?php echo Yii::app()->request->baseUrl; ?>/images/nothing.gif' alt='' /> &nbsp;</div>
					</div>
					
					<script type='text/javascript'>
						GarageDoor.scrollY = -55;
						GarageDoor.setBindings('garagedoor');
					</script>
		</div>
</div>		
	
	
	<!-- header -->

	
	
	
	
	<!-- mainmenu -->
	
	<div id="cuerpoPanel">
		<?php echo $content; ?>
	</div>

<div id="cabeceraPanel"></div>
			
<div id="leftPanel">
				
				
				
				
				
				<div id="dondestamos">
				
				</div>
				
				
				
				
				
				
				
			</div>			
			
			
			
			
			
			
			
			<div id="footer">
					<img src="/imgJose/dooo.png">	
			</div>

</div><!-- page -->

</body>
</html>

<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	

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
 bottom:0;
 width:228px;
 margin:25px;
 color:#cccccc;
font-family:"Helvetica Neue", Arial, Helvetica, sans-serif;
font-size:17px;
text-align:left;
 background: #444499;
 -moz-border-radius: 15px;
 border-radius: 15px;
}




</style>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="index">

<div id="mainmenu">

			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Inicio', 'url'=>array('/site/index')),
					array('label'=>'Galeria', 'url'=>array('/site/galeria')),
					array('label'=>'Empresa', 'url'=>array('/site/about')),
					array('label'=>'Contacto', 'url'=>array('/site/contact')),
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
			
<div id="leftPanel">
				<div id="leftPanelWidget1">
				<ul id="treemenu2" class="treeview">
				
				<li>+ Hoteles y Restaurantes
				</li>
				<li>+ Turismo Rural
				</li>
				<li>+ Conexion AVE
				</li>
				<li>+ Guia Gastronomica
				</li>
				</ul>

				<script type="text/javascript">
				ddtreemenu.createTree("treemenu2", true)
				</script>
				<p>&nbsp;&nbsp;</p>
				
				</div>
				
				
				
				
				<div id="dondestamos">
				<p>Rotulos Jose<br>
				Poligono Puente Alto, s/n<br>
				03433 Orihuela(Alicante)<br>
				Telefono:9234523<br>
				e-mail:info@rotulosjose.com</p>
				</div>
				
				
				
				
				
				
				
			</div>			
			
			
			
			
			
			
			
			<div id="footer">
						
			</div>

</div><!-- page -->

</body>
</html>

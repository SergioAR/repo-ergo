<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="copyright" content="Ergopilates" />
<title>Ergopilates</title>
<meta name="title" content="Ergopilates">
<meta name="DC.Title" content="Ergopilates">
<meta http-equiv="title" content="Ergopilates">
<meta name="DC.Creator" content="www.altas-buscadores.com">
<meta name="keywords" content="ergopilates,pilates,gimnasio,Andalucia,M&aacute;laga, Osteopatia,
								Nutricion, Podologia, Estetica, Entrenamiento Personalizado"/>
<meta http-equiv="keywords" content="ergopilates,pilates,gimnasio,Andalucia,M&aacute;laga, Osteopatia,
								Nutricion, Podologia, Estetica, Entrenamiento Personalizado"/>
<meta name="description" content="Ofrecemos servicios de Osteopat&iacute;a, Nutrici&oacute;n, 
								Podolog&iacute;a, Est&eacute;a y Entrenamiento personalizado." />
<meta http-equiv="description" content="Ofrecemos servicios de Osteopat&iacute;a, Nutrici&oacute;n, 
								Podolog&iacute;a, Est&eacute;a y Entrenamiento personalizado." />
<meta http-equiv="DC.Description" content="Ofrecemos servicios de Osteopat&iacute;a, Nutrici&oacute;n, 
								Podolog&iacute;a, Est&eacute;a y Entrenamiento personalizado." />
<meta name="author" content="">
<meta name="DC.Creator" content="">
<meta name="vw96.objectype" content="Document">
<meta name="resource-type" content="Document">
<meta name="distribution" content="all">
<meta name="robots" content="all">
<meta name="revisit" content="15 days">

	<title>Ergopilates</title>
	<?php include 'php/includes/scripts.php';?>
</head>
<body onload="load();">
	<div id="content" >
		<br/>
	    <?php echo $mail_msg;?>	    
		<div id="logo"><a href="index.php"><img src="images/logo.jpg"/></a></div>
		<br/>
		<div id="header"></div>
		<div id="nav"><?php include 'php/includes/nav.php';?></div>
		<div id="rigth-panel"><?php include_once 'php/includes/panel.php';?></div>
	
		<div id="centro" style="min-height:1100px;">
			<h1>Testimonios</h1><br/>
			<div id="hr"></div>	
			
			<?php
				$test=new TestimonioDAO("","","","","");
				$consulta=$test->getTestimoniosTop();
				$x=1;
				while($resultados = $test->getDB()->fetch_array($consulta)){
			?>				
				<div style="clear: both;height:30px;"></div>
				<div class="testimonio">
					<img class="testimonio_foto" src="<?php echo $resultados['Foto'];?>"/>							
					<div class="testimonio_nombre"><p><?php echo $resultados['Nombre'];?></p></div>
					<div class="testimonio_act"><p><?php echo $resultados['Actividad'];?></p></div>
					<div class="testimonio_test"><p style="text-align: justify;"><?php echo $resultados['Testimonio'];?></p></div>	
					<div style="clear: both;height:10px;"></div>					
				</div>			
			<?php }?>
		</div>
		<div style="clear: both;height:10px;"></div>
		<div class="hr"></div>
				<div style="clear: both; height: 70px;"><p id="foot-copy">Copyright &copy; Ergopilates 2012 Todos los derechos reservados.<br/>Powered by  <a href="mailto:agioWeb@gmail.com">agioWeb S.L.</a></p></div>
	</div>
	<div style="clear: both;height:30px;"></div>
</body>
</html>
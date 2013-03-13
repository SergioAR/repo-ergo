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
<meta name="keywords" content="ergopilates,pilates,gimnasio,Andalucia,Málaga">
<meta http-equiv="keywords" content="ergopilates,pilates,gimnasio,Andalucia,Málaga">
<meta name="description" content="En ERGOPILATES contamos con una sala exclusiva de entrenamiento personal, 
					dotada de una m&aacute;quina de Pilates, bicicleta Cardgirus y KINESIS.">
<meta http-equiv="description" content="En ERGOPILATES contamos con una sala exclusiva de entrenamiento personal, 
					dotada de una m&aacute;quina de Pilates, bicicleta Cardgirus y KINESIS.">
<meta http-equiv="DC.Description" content="En ERGOPILATES contamos con una sala exclusiva de entrenamiento personal, 
					dotada de una m&aacute;quina de Pilates, bicicleta Cardgirus y KINESIS.">
<meta name="author" content="">
<meta name="DC.Creator" content="">
<meta name="vw96.objectype" content="Document">
<meta name="resource-type" content="Document">
<meta name="distribution" content="all">
<meta name="robots" content="all">
<meta name="revisit" content="15 days">
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
		
		<div id="kinesis">
			<h1>Entrenamiento Personal, Kinesis</h1><br/>
			<div id="hr"></div>
			<div id="kinesis_text">
				<p style="text-align: justify;"><br/><br/><br/>
					En ERGOPILATES creemos en la necesidad de un ejercicio personalizado.
					La actividad f&iacute;sica debe tener en cuenta todas las caracter&iacute;ticas 
					individuales de  las personas que  se inician en ella o que ya tienen una salida 
					experiencia, ya que cada uno se adapta de forma diferente al ejercicio, 
					ya sea por problemas de coordinaci&oacute;n, edad, patolog&iacute;as o lesiones 
					existentes de ah&iacute; que cada  individuo demande una actividad diferente
					 a su compa&ntilde;ero.<br/><br/><br/><br/>
					Con el entrenamiento personalizado se va a conseguir una serie de beneficios 
					que son m&aacute;s complicados alcanzar en una clase colectiva.
					Contamos con una sala exclusiva de entrenamiento personal, 
					dotada de una m&aacute;quina de Pilates, bicicleta Cardgirus y KINESIS. 
					La combinaci&oacute;n de estas tres  m&aacute;quinas nos permitir&aacute; alcanzar 
					un trabajo total.</p>
			</div>
		</div>
		<br/><br/>
		<div id="entrenadores">		
			<h1>Entrenadores</h1><br/>
			<div id="hr"></div>
			<br/>
			<div id="et1">
				<img src="images/entrenador1.jpg"/>
				<br/><br/>
				<h2>Francisco Jos&eacute; Santana P&eacute;rez</h2>
				<p>Licenciado en Ciencias de la Actividad F&iacute;sica y el Deporte</p>
			</div>
			<div id="et2">
				<img src="images/entrenador2.jpg"/>
				<br/><br/>
				<h2>Luis Javier Doniga Manj&oacute;</h2>
				<p>Licenciado en Ciencias de la Actividad F&iacute;sica y el Deporte</p>
			</div>
		</div>
		<br/><br/>
		<div style="clear: both;height:100px;"></div>
		<div class="hr"></div>
						<div style="clear: both; height: 70px;"><p id="foot-copy">Copyright &copy; Ergopilates 2012 Todos los derechos reservados.<br/>Powered by  <a href="mailto:agioWeb@gmail.com">agioWeb S.L.</a></p></div>
	</div>
		<div style="clear: both;height:30px;"></div>
	
</body>
</html>
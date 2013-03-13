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

<?php include 'php/includes/scripts.php';?>
</head>

<body onload="load();">
	<div id="content">
		<br />
	    <?php echo $mail_msg;?>	    
		
		<div id="logo"><a href="index.php"><img src="images/logo.jpg" /></a></div>
		<br />
		<div id="header"></div>
		<div id="nav"><?php include 'php/includes/nav.php';?></div>
		<div id="rigth-panel"><?php include_once 'php/includes/panel.php';?></div>
		<div id="servicios">
			<h1>Servicios</h1>
			<br />
			<div id="hr"></div>
			<br />
			<div id="servicios_text">
				<div id='content-modal'>
					<!-- osteopatia 
					<div id='basic-modal-Osteopatia' style="width: 100px;">
						<a href='#' class='basic-Osteopatia'><div id="osteopatia">
								<h2>Osteopat&iacute;a</h2>
								<p>M&aacute;s informaci&oacute;n</p>
							</div></a>
							<div id="basic-modal-content-Osteopatia">
								<div><img src="images/proximamente.jpg"/></div>
							</div>
					</div>
					<!-- nutricion
					<div id='basic-modal-Nutricion'>
						<a href='#' class='basic-Nutricion'><div id="nutricion">
								<h2>Nutrici&oacute;n</h2>
								<p>M&aacute;s informaci&oacute;n</p>
						</div></a>
						<div id="basic-modal-content-Nutricion">
							<div><img src="images/proximamente.jpg"/></div>
						</div>
					</div>
					<!-- podologia 
					<div id='basic-modal-Podologia'>
						<a href='#' class='basic-Podologia'><div id="podologia">
								<h2>Podolog&iacute;a</h2>
								<p>M&aacute;s informaci&oacute;n</p>
						</div></a>
						<div id="basic-modal-content-Podologia">
							<div><img src="images/proximamente.jpg"/></div>						
						</div>
					</div>-->
					<!-- etto personal-->
					<div id='basic-modal-Personal'>
						<a href='#' class='basic-Personal'>
							<div id="personal">
								<h2>Entrenamiento Personal</h2><div style="clear: both; height: 67px;"></div>
								<p>M&aacute;s informaci&oacute;n </p>
							</div>
						</a>							
						<!-- modal content -->
						<div id="basic-modal-content-Personal">
							<h3 >Informaci&oacute;n</h3>
							<br/>
							<p style="text-align: justify;">
							En ERGOPILATES creemos en la necesidad de un ejercicio personalizado. 
							La actividad f&iacute;sica debe tener en cuenta todas las caracter&iacute;ticas individuales de las personas que se inician en ella 
							o que ya tienen una salida experiencia, ya que cada uno se adapta de forma diferente al ejercicio, ya sea por problemas de coordinaci&oacute;n,
							 edad, patolog&iacute;as o lesiones existentes de ah&iacute; que cada individuo demande una actividad diferente a su compa&ntilde;ero.
							</p><p style="text-align: justify;">
							Con el entrenamiento personalizado se va a conseguir una serie de beneficios que son m&aacute;s complicados alcanzar en una clase colectiva. 
							Contamos con una sala exclusiva de entrenamiento personal, dotada de una m&aacute;quina de Pilates, bicicleta Cardgirus y KINESIS. 
							La combinaci&oacute;n de estas tres m&aacute;quinas nos permitir&aacute; alcanzar un trabajo total.
							</p>
							<br/><br/>
							<div id="entrenadores">		
								<div id="et1" style=" width: auto;">
									<img style="float:left; margin-right:15px;" src="images/entrenador1.jpg"/>									
									<h2>Francisco Jos&eacute; Santana P&eacute;rez</h2>
									<p>Licenciado en Ciencias de la Actividad F&iacute;sica y el Deporte</p>
								</div>
								<div id="et2" style=" width: auto;">
									<img src="images/entrenador2.jpg" style="float:left; margin-right:15px;"/>
									<h2>Luis Javier Doniga Manj&oacute;</h2>
									<p>Licenciado en Ciencias de la Actividad F&iacute;sica y el Deporte</p>
								</div>
							</div>
						</div>
						</div>
						
					<!-- estetica -->
					<div id='basic-modal-Estetica'>
						<a href='#' class='basic-Estetica'>
							<div id="estetic">
								<h2>Est&eacute;tica</h2>
								<p>M&aacute;s informaci&oacute;n</p>
							</div>
						</a>
						<div id="basic-modal-content-Estetica">
							<h3>Nuestra oferta</h3><br/>
							<p style="font-size:13pt;">
							Tratamientos de belleza cl&aacute;sicos, masajes revitalizantes. 
							&iexcl;P&oacute;ngase en manos de nuestros esteticistas! Con sus cuidados convierten cualquier tratamiento en una experiencia inolvidable.<br/>	<br/>				
							Algunos de los tratamientos de nuestra oferta:</p>
							<br/>
							<img src="images/estetica.jpg"/>	
							
							<ol style="float: right;">
							    <li>Faciales</li>
							    <li>Manicuras</li>
							    <li>Colocaci&oacute;n de u&ntilde;as esculpidas</li>
							    <li>Tratamientos corporales</li>
							    <li>Cavitaci&oacute;n</li>
							    <li>Plataforma vibratoria</li>
							    <li>Depilaci&oacute;nes</li>
							    <li>Fotodepilaci&oacute;n</li>
							    <li>Masajes</li>
							    <li>Pedicuras</li>
							</ol>
							<br/><br/>							
							<a target="blank" href="http://eandbcentrodebelleza.es/tratamientos/">M&aacute;s informaci&oacute;n</a>							
						</div>
					</div>
					<!-- -->
					<div id='basic-modal-Pilates'>
						<a href='#' class='basic-Pilates'><div id="pilates">
								<h2>Pilates</h2>
								<p>M&aacute;s informaci&oacute;n</p>
						</div></a>
						<div id="basic-modal-content-Pilates">
							<h3>Nuestra oferta</h3><br/>
							<p style="font-size:11pt; text-align: justify;">
					
								El m&eacute;todo Pilates es un sistema completo de ejercicios que mejora la fuerza, 
								la flexibilidad y el acondicionamiento cardiovascular, as&iacute; como el equilibrio 
								y la coordinaci&oacute;n. <br/><br/>
								Adem&aacute;s, beneficia a la postura corporal, puede ser una 
								herramienta importante para la prevenci&oacute;n de lesiones, la mejora del 
								rendimiento de un deporte y puede ser utilizada como trabajo de rehabilitaci&oacute;n. 
								<br/><br/>
								Su creador, J.H. Pilates, lo defin&iacute;a como: "ciencia y arte del desarrollo 
								coordinado de la mente, el cuerpo y el esp&iacute;ritu, a trav&eacute;s de movimientos naturales, 
								bajo el estricto control de la voluntad"
								<br/>
								(Pilates, 1934, 37; Pilates y Miller, 1945, 9).
							</P>
							<p style="font-size:11pt; text-align: justify;">
								<br/>
								Desde Ergopilates nos esforzamos cada d&iacute;a para ofrecer a nuestros clientes el 
								trabajo m&aacute;s correcto, para que de esta forma obtengan sus beneficios.
							</p>	
							 
						</div>
					</div>
					
	
					<!-- preload the images -->
					<div style='display: none'>
						<img src='lib/basic/img/basic/x.png' alt='' />
					</div>
				</div>
			</div>
		</div>

		<div class="hr"></div>
				<div style="clear: both; height: 70px;"><p id="foot-copy">Copyright &copy; Ergopilates 2012 Todos los derechos reservados.<br/>Powered by  <a href="mailto:agioWeb@gmail.com">agioWeb S.L.</a></p></div>
	</div>
	<div style="clear: both;height:30px;"></div>	
</body>
</html>

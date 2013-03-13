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
<meta name="keywords" content="ergopilates,pilates,gimnasio,Andalucia,Mlaga">
<meta http-equiv="keywords" content="ergopilates,pilates,gimnasio,Andalucia,Mlaga">
<meta name="description" content="Conoce nuestros horarios y actividades.">
<meta http-equiv="description" content="Conoce nuestros horarios y actividades.">
<meta http-equiv="DC.Description" content="Conoce nuestros horarios y actividades.">
<meta name="author" content="">
<meta name="DC.Creator" content="">
<meta name="vw96.objectype" content="Document">
<meta name="resource-type" content="Document">
<meta name="distribution" content="all">
<meta name="robots" content="all">
<meta name="revisit" content="15 days">
	<?php include 'php/includes/scripts.php';?>
</head>

<body onLoad="load();">
	<div id="content">
	<br/>
		<div id="logo"><a href="index.php"><img src="images/logo.jpg"/></a></div>
		<br/>
	    <?php echo $mail_msg;?>	    
		
		<div id="header"></div>
		<div id="nav"><?php include 'php/includes/nav.php';?></div>
		<div id="rigth-panel"><?php include_once 'php/includes/panel.php';?></div>

		<div id="centro">
			<h1>Horarios y normas</h1><br/>
			<div id="hr"></div><br/>
			<div id="centro_text">
			
				<table>
					<tr><th scope="col">HORAS</th><th scope="col">	LUNES</th><th scope="col">	MARTES</th><th scope="col">	MI&Eacute;RCOLES</th><th scope="col">	JUEVES</th></tr>
					<tr><th scope="row">9:00 a  9:55</th><td>	Mat / Studio</td><td>	Mat / Studio</td><td>	Mat / Studio</td><td>	Mat / Studio</td></tr>
					<tr><th scope="row">10:00 a 10:55</th><td>	Studio</td><td>	Mat / Studio</td><td>	Studio</td><td>	Mat / Studio</td></tr>
					<tr><th scope="row">15:30 a 16:25</th><td>	Mat / Studio</td><td>	Mat / Studio</td><td>	Mat </td><td>	Mat / Studio</td></tr>
					<tr><th scope="row">16:30 a 17:25</th><td>	Mat / Studio</td><td>	Mat / Studio</td><td>	Mat </td><td>	Mat / Studio</td></tr>
					<tr><th scope="row">18:00 a 18:55</th><td>	Mat /Studio</td><td>	Mat 		</td><td>Mat/Studio</td><td>Mat</td>	</tr>
					<tr><th scope="row">19:00 a 19:55</th><td>	Mat / Studio</td><td>	Mat / Studio</td><td>	Mat / Studio</td><td>	Mat / Studio</td></tr>
					<tr><th scope="row">20:00 a 20:55</th><td>	Mat / Studio</td><td>	Mat / Studio</td><td>	Mat / Studio</td><td>	Mat / Studio</td></tr>
					<!--<tr><th scope="row">21:00 a 22:00</th><td>	Bailes de Sal&oacute;n</td><td></td><td>Bailes de Sal&oacute;n</td>-->
					
				</table>
				<br/><br/>
				<font style="font-weight: bold;">Normas b&aacute;sicas de funcionamiento del centro:</font>
				<ol>
					<li>Todas las horas que aparecen en el horario no son horas
						reales. Para que sean efectivas debe existir un m&iacute;nimo de 5
						personas inscritas en las clases de mat y 2 en las clases de
						studio. El m&aacute;ximo para estas actividades ser&aacute; de 10
						y 5 personas respectivamente, con el fin de no perder calidad en
						las clases (preguntar en recepci&oacute;n horarios actuales).</li>
					<li>Las clases, en las diferentes actividades, tienen una
						duraci&oacute;n de 55 minutos. Se ruega que sea puntual y coloque
						el material en el lugar correspondiente.</li>
					<li>El bono de iniciaci&oacute;n se utiliza para conocer el
						m&eacute;todo sin ning&uacute;n compromiso de continuidad. Por
						otro lado, es el primer paso para ingresar en clases colectivas de
						mat o semiprivadas de studio, ya que el profesor le
						ense&nacute;ar&aacute;, en clase privada, los fundamentos del
						m&eacute;todo lo cual le permitir&aacute; trabajar el d&iacute;a a
						d&iacute;a con mayor fluidez.</li>
					<li>Los bonos de sesiones privadas se consumen por citas y
						poseen caducidad, estableci&eacute;ndose la siguiente
						relaci&oacute;n: <b>5 sesiones = 8 semanas; 10 sesiones = 13 semanas;
						15 sesiones = 18 semanas</b>. Por otro lado, estas sesiones pueden ser
						utilizadas por otra persona distinta al titular, siempre y cuando
						se avise previamente en recepci&oacute;n.</li>
					<li>Las citas para las sesiones privadas deber&aacute;n ser
						canceladas con <b>24 horas de antelaci&oacute;n</b>, antes de las <b>19:00</b>.
						Las citas del lunes deber&aacute;n ser canceladas <b>el viernes
						anterior</b> antes de las 19:00. En caso contrario, se
						descontar&aacute;n como si se hubieran tomado.</li>
					<li>Las clases perdidas (de mat o studio) pueden ser
						recuperadas, dentro del mismo mes o en su caso en la primera
						semana del mes siguiente, si despu&eacute;s de consultar en
						recepci&oacute;n, existe alguna plaza libre en alguno de los
						grupos.</li>
					<li>Las clases se realizar&aacute;n en calcetines de manera que
						el calzado se quedar&aacute; en el lugar habilitado para ello.
						Adem&aacute;s, es obligatorio el uso de toalla para la
						realizaci&oacute;n de ejercicios.</li>
					<li>El abono de la actividad deber&aacute; realizarse del 1 al 5
						de cada mes.</li>
					<li>En el caso de periodos largos de no asistencia (vacaciones,
						lesiones, enfermedad...) al centro, tendr&aacute; la posibilidad
						de reservar su plaza durante dos meses abonando la cantidad de 20
						&euro;. Si se falta durante un mes sin comunicar la baja con
						antelaci&oacute;n y sin haber abonado la cuota mensual, su plaza
						quedar&aacute; libre para ser ocupada por otro cliente.</li>
				</ol>
				La direcci&oacute;n se reserva el derecho de modificar horarios y
				profesorado.
			</div>			
		</div>	
		<div class="hr"></div>
						<div style="clear: both; height: 70px;"><p id="foot-copy">Copyright &copy; Ergopilates 2012 Todos los derechos reservados.<br/>Powered by  <a href="mailto:agioWeb@gmail.com">agioWeb S.L.</a></p></div>
	</div>
	<div style="clear: both;height:30px;"></div>	
</body>
</html>
<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="copyright" content="Ergopilates" />
	<meta name="robots" content="all,index,follow" />
	<meta name="keywords" content="ergopilates,pilates,gimnasio,Andalucia,M&aacute;laga, Osteopatia,
								Nutricion, Podologia, Estetica, Entrenamiento Personalizado"/>
	<meta name="DC.title" content="Ergopilates - Conoce tu cuerpo y lib&eacute;rate" />
	<meta name="description" content="Vis&iacute;tanos en C/ Miguel Indurain, 13, Parque Clavero, 29016 M&aacute;laga /n
	Tlf:952.207.306  Móvil: 651.569.285 / 609.768.690" />
	<title>Ergopilates</title>
	<?php include 'php/includes/scripts.php';?>
	<script type="text/javascript">
	$().ready(function(){
	    $("#formulario").validate();
	  }); 
	</script>
</head>

<body onload="load();">
	<div id="content">
	<br/>
	    <?php echo $mail_msg;?>	    
	
	
		<div id="logo"><a href="index.php"><img src="images/logo.jpg"/></a></div>
		<br/>
		<div id="header"></div>
		<div id="nav"><?php include 'php/includes/nav.php';?></div>
		<div id="rigth-panel"><?php include_once 'php/includes/panel.php';?></div>

		<div id="mapa">
			<h1>Ubicaci&oacute;n</h1><br/>
			<div id="hr"></div><br/>
			<iframe width="580" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
			src="http://maps.google.es/maps?q=ergopilates&amp;hl=es&amp;t=h&amp;ie=UTF8&amp;view=map&amp;cid=13372339658939360675&amp;
			ll=36.729753,-4.389317&amp;spn=0.006019,0.00912&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br />			
		</div>
		<br/><br/><br/>
		<div id="datos">
			<img src="images/datos-contacto.jpg"/>
			<h3>Datos de Ergopilates Parque Clavero</h3>			
			<div id="sub-datos">
				<b>Gimnasio:</b> <label>ERGOPILATES - Parque Clavero</label>
				<b>&iquest;D&oacute;nde estamos?:</b> <label>C/ Miguel Indurain, 13, Parque Clavero, 29016 M&aacute;laga</label>
				<b>&iquest;C&oacute;mo contactarnos?:</b> <label>Tlf: 952.207.306  M&oacute;vil: 651.569.285 / 609.768.690</label>
			</div>
		</div>
		<br/><br/>
		<div id="datos">
			<img src="images/datos-contacto.jpg"/>
			<h3>Datos de Ergopilates Centro</h3>			
			<div id="sub-datos">
				<b>Gimnasio:</b> <label>ERGOPILATES - Centro</label>
				<b>&iquest;D&oacute;nde estamos?:</b> <label> C/ Don Cristi&aacute;n, 3, Edificio el Perchel, entreplanta 29007 M&aacute;laga</label>
				<b>&iquest;C&oacute;mo contactarnos?:</b> <label>Tlf: 951.382.915</label>
			</div>
		</div>
		<br/><br/>
		<div id="form-contacto">
			<h2>Formulario de contacto</h2>
			<div id="hr"></div><br/>	    	
			<form id="formulario" class="well" style="width: 590px;" action="php/data/Mail.php" method="post">
				<input type="hidden" name="test" value="2"/>
			    <label><font color="red">*</font> Nombre:</label> <input class="required span4" type="text" name="nombre"/>
				<label><font color="red">*</font> Email:</label> <input class="required span4" type="text" name="email"/>
				<label><font color="red">*</font> Tel&eacute;fono:</label> <input class="required span4" type="text"  name="telefono"/>
				<label><font color="red">*</font> Centro:</label> 
					<select id="scentro" class="required">
						<option value="">-- Seleccione centro --</option>
						<option value="1">Ergopilates Parque Clavero</option>
						<option value="2">Ergopilates Centro</option>
					</select>
				<label><font color="red">*</font> Consulta:</label> <textarea class="required span6"  name="consulta"></textarea>
				<br/><input style="margin-left:500px;" class="btn btn-info" type="submit"  value="Enviar" />
			</form>	
		</div>
		<div style="clear: both;height:50px;"></div>
		<div class="hr"></div>
						<div style="clear: both; height: 70px;"><p id="foot-copy">Copyright &copy; Ergopilates 2012 Todos los derechos reservados.<br/>Powered by  <a href="mailto:agioWeb@gmail.com">agioWeb S.L.</a></p></div>
	</div>
	<div style="clear: both;height:30px;"></div>
</body>
</html>
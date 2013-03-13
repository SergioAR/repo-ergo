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
<meta name="description" content="Entra en nuestra &aacute;rea de clientes.">
<meta http-equiv="description" content="Entra en nuestra &aacute;rea de clientes.">
<meta http-equiv="DC.Description" content="Entra en nuestra &aacute;rea de clientes.">
<meta name="author" content="">
<meta name="DC.Creator" content="">
<meta name="vw96.objectype" content="Document">
<meta name="resource-type" content="Document">
<meta name="distribution" content="all">
<meta name="robots" content="all">
<meta name="revisit" content="15 days">
	<?php include 'php/includes/scripts.php';?>
	<?php 
		if(isset($_GET['grupo'])){
			$grupoid=$_GET['grupo'];
		}else{
			$grupoid=0;
		}
	?>
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

		<div id="servicios">
			<h1>&Aacute;rea de clientes</h1><br/>
			<div id="hr"></div><br/>	
									
			<div id="error_login" class="alert alert-error hide fade in">
    			<a class="close" onclick='$("#error_login").hide();' data-dismiss="alert">x</a>
   				 <strong>Error!</strong> Usuario o clave incorrectos.
    		</div>
    
			<div id="user_panel">
				<div id="login">
					<?php if(!isset ($_SESSION['user'])){?>	
						<form class="form-inline" action="php/data/login.php" method="POST">
							<input type="text" name="usuario" id="usuario" class="input-small" placeholder="Usuario"/><br/>
							<div style="clear: both;height:3px;"></div> 
							<input type="password" name="clave" id="clave" class="input-small" placeholder="Contrase&ntilde;a"/>
							<input type="submit" class="btn btn-info" value="Entrar"/>
						</form>
					<?php }else{
						 if($_SESSION['nivel']==1){?>
							Bienvenido <a href="admin.php"><font id="user_name"><?php echo $_SESSION['user'];?></font>
						<?php }else{?>
							Bienvenido <font id="user_name"><?php echo $_SESSION['user'];?></font>
						<?php }?>				
						<br/><br/>			
						<a class="btn btn-danger" href="php/data/logout.php">Salir</a>
					<?php }?>
				</div>
			</div>
				
			<div id="doc_panel">
				<div id="docs">
					<?php
						$fic = new FicheroDAO("", "", "","");
						$consulta=$fic->getFicherosByGrupo($grupoid);
						$res=$fic->getDB()->num_rows($consulta);						
						while($resultados = $fic->getDB()->fetch_array($consulta)){
							echo '<div><a target="blank" href="'.$resultados['Ruta'].'"><img src="images/pdf-icon.png"/> <span>'.$resultados['Nombre'].'</span></a>  </div>';
						}
						if($res==0 && isset($_GET['grupo'])){echo "<h5>No hay archivos subidos para este grupo</h5>";}
						elseif(!isset($_GET['grupo'])){echo "<h5>Seleccione una carpeta para ver los archivos</h5>";}
					?>
				</div>
				
				<div id="nav_docs">
					<?php 
						$grupo = new GrupoDAO("", "");
						$consulta= $grupo->getGrupoPublico();
						while($resultados = $grupo->getDB()->fetch_array($consulta)){
							echo '<div><a href="?grupo='.$resultados['ID'].'"><img src="images/folder.png"/> <span>'.$resultados['Nombre'].'</span></a></div>';
						}
					
						$nivel=0;
						$userID=-1;
						
						if(isset ($_SESSION['nivel']) && isset($_SESSION['userID'])){ 
							$nivel = $_SESSION['nivel'];
							$userID = $_SESSION['userID'];
						}
												
						$grupo = new GrupoDAO("", "");
						if($nivel==1){
							$consulta = $grupo->getGrupos();
						}else{
							$consulta = $grupo->getGruposByPermisos($userID);
						}
						while($resultados = $grupo->getDB()->fetch_array($consulta)){
							echo '<div><a href="?grupo='.$resultados['ID'].'"><img src="images/folder.png"/> <span>'.$resultados['Nombre'].'</span></a></div>';							
						}
					?>				
				</div>
			</div>
		</div>
		<div class="hr"></div>
		<div style="clear: both; height: 70px;"><p id="foot-copy">Copyright &copy; Ergopilates 2012 Todos los derechos reservados.<br/>Powered by  <a href="mailto:agioWeb@gmail.com">agioWeb S.L.</a></p></div>
	</div>
	<div style="clear: both;height:30px;"></div>
</body>
</html>
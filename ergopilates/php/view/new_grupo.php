<?php 	session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ergopilates-Admin</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<?php
	$url="index.php";
	
	isset($_SESSION['user'])? "" :header("Location:".$url);
	
	function __autoload($class_name) {
		require_once '../../php/data/'.$class_name.".php";
	}
?>
<link type="text/css" href="styles.css" rel="stylesheet"/>
<link type='text/css' href='../../lib/basic/css/basic.css' rel='stylesheet' media='screen' />
<link type='text/css' href='../../lib/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen' />
<link type='text/css' href='../../lib/bootstrap/css/bootstrap-responsive.min.css' rel='stylesheet' media='screen' />

<script type='text/javascript' src='../../lib/basic/js/jquery.js'></script>
<script type='text/javascript' src='../../lib/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='../../lib/basic/js/basic.js'></script>
<script type='text/javascript' src='../../lib/bootstrap/js/bootstrap.js'></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="../../lib/jquery.validate.js"></script>
<script type="text/javascript"><!--
$().ready(function() {
	$("#formulario").validate();
});
</script>
</head>
<body>
<?php if ($_GET['id']>0){
	$not= new GrupoDAO("", "", "")	;			
	$consulta=$not->getGrupo($_GET['id']);
	$res = $not->getDB()->fetch_array($consulta);
?>  
	
<div class="header"></div>
	<div class="form" style="margin-left:30%">
	<form id="formulario" class="well" style="width: 400px;" action="../data/hGrupo.php" method="post">
		<div class="form">
			<div class="headers">Actualizar Grupo <a href="../../admin.php">Volver</a></div>		
			<input type="hidden" name="act" value="update"></input>
			<input type="hidden" name="id" value="<?php echo $_GET['id']?>"></input>
			<label><font color="red">*</font>Nombre:</label><input type="text" class="required span4" name="nombre" value="<?php echo $res['Nombre']?>"/> 
			<br/>										
			<input style="margin-left:290px;" type="submit"  class="btn btn-info" value="Guardar"/> 		
		</div>
		</form>	
	</div>
<?php }else{?>
	<div class="header"></div>
	<div class="form" style="margin-left:30%">
		<form id="formulario" class="well" style="width: 400px;" action="../data/hGrupo.php" method="post">
			<div class="form">
				<div class="headers">Nuevo Grupo <a href="../../admin.php">Volver</a></div>		
				<input type="hidden" name="act" value="create"></input>
				<label><font color="red">*</font>Nombre:</label><input type="text"  class="required span4" name="nombre"/> 						
				<br/>				
				<input style="margin-left:290px;" type="submit"  class="btn btn-info" value="Guardar"/> 		
			</div>
		</form>	
	</div>
<?php }?>
</body>
</html>
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
	$("#formulario").validate({
		rules: {
			pass2: {required:true, equalTo: "#pass"},			
			},
		messages: {
			pass2: " * Las claves no coinciden.",			
		}
	});
	});
	// -->
</script>
</head>
<body>
<?php if ($_GET['id']>0){
	$user= new UsuarioDAO("", "", "", "")	;			
	$consulta=$user->getUser($_GET['id']);
	$result = $user->getDB()->fetch_array($consulta);
?>  
<div class="header"></div>
<div class="form" style="margin-left:30%">
	<form id="formulario" class="well" style="width: 400px;" action="../data/hUsuario.php" method="post">
		<div class="form">
			<div class="headers">Actualizar Usuario <a href="../../admin.php">Volver</a></div>		
			<input type="hidden" name="act" value="update"></input>
			<input type="hidden" name="id" value="<?php echo $_GET['id']?>"></input>
			<label><font color="red">*</font> Nombre:</label><input class="required span4" type="text" id="usuario" name="usuario" value="<?php echo $result['usuario']?>"/> 			
			<label><font color="red">*</font> Clave:</label><input class="required span4" type="password" id="pass" name="pass" value="<?php echo $result['pass']?>"/>
			<label><font color="red">*</font> Repita la clave:</label><input class="required span4" type="password" id="pass2" name="pass2" value="<?php echo $result['pass']?>"/>	
			<label>Nivel:</label><select name="nivel">
				<option value="0"<?php if($result['nivel']==0){echo "selected='true'";}?>>Normal</option>
				<option value="1"<?php if($result['nivel']==1){echo "selected='true'";}?>>Administrador</option></select> 
			<label>Permisos:</label>					
					<?php 	
						$grupo = new GrupoDAO("", "");
						$consulta = $grupo->getGrupos();			
						while($resultados = $grupo->getDB()->fetch_array($consulta)){
							$consultaU = $user->getPermisos($_GET['id']);
							echo "<label class='checkbox'>";
							echo "<input";
							while($resultU = $user->getDB()->fetch_array($consultaU)){
								if($resultados['ID']==$resultU['Grupo']){echo " checked='true' ";}
							}
							echo " name='grupo[]' type='checkbox' value='".$resultados['ID']."'>".$resultados['Nombre']."</input>";
							echo "</label>";
						}							
					?>
			<input style="margin-left:290px;" type="submit"  class="btn btn-info" value="Guardar"/> 		
		</div>
	</form>	
</div>
<?php }else{?>
<div class="header"></div>
<div class="form" style="margin-left:30%">
	<form id="formulario" class="well" style="width: 400px;" action="../data/hUsuario.php" method="post">
		<div class="form">
			<div class="headers">Nuevo Usuario <a href="../../admin.php">Volver</a></div>		
			<input type="hidden" name="act" value="create"></input>
			<label><font color="red">*</font> Nombre:</label><input class="required span4"  type="text" id="usuario" name="usuario"/> 			
			<label><font color="red">*</font> Clave:</label><input class="required span4" type="password" id="pass" name="pass" /> 
			<label><font color="red">*</font> Repita la clave:</label><input class="required span4" type="password" id="pass2" name="pass2" /> 			
			<label>Nivel:</label><select name="nivel"><option value="0">Normal</option><option value="1">Administrador</option></select>
			<label>Permisos:</label>					
				<?php 
					$grupo = new GrupoDAO("", "");
					$consulta = $grupo->getGrupos();
					while($resultados = $grupo->getDB()->fetch_array($consulta)){
						echo "<label class='checkbox'><input  name='grupo[]' type='checkbox' value='".$resultados['ID']."'>".$resultados['Nombre']."</input></label>";							
					}
				?>
			<br/><br/>
			<input style="margin-left:290px;" type="submit"  class="btn btn-info" value="Guardar"/> 		
		</div>
	</form>	
</div>
<?php }?>
</body>
</html>
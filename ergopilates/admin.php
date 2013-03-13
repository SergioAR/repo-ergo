<?php
session_start();
$url="index.php";
isset($_SESSION['user'])? "" :header("Location:".$url);
function __autoload($class_name) {
	require_once 'php/data/'.$class_name.".php";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ergopilates-Admin</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles_admin.css" rel="stylesheet" type="text/css" />
<link type='text/css' href='lib/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen' />

<link type='text/css' href='lib/bootstrap/css/bootstrap-responsive.min.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='lib/bootstrap/js/bootstrap.min.js'></script>
<script type="text/javascript" src="lib/jquery.validate.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>


<script type="text/javascript">
function confirmDelete(delUrl) {
 if (confirm("Deseas borrar?")) {
	document.location = delUrl;
		  }
}			
</script>

</head>
<body>
	<div class="header"></div>
	<div>
	 <span><a href="aclientes.php" title="volver" class="btn btn-success">VOLVER</a></span>
	 <span><a href="php/data/logout.php" title="salir" class="btn btn-danger">SALIR</a></span>
	 </div>	 
	<div class="content">
		<div class="right">
			<div class="headers">1. GRUPOS</div>
			<table class="table table-striped table-bordered table-condensed">
				<tr><td>ID</td><td>Nombre</td></tr>				
				<?php
				$grupo=new GrupoDAO("", "", "");
				$consulta=$grupo->getAllGrupos();
				while($resultados = $grupo->getDB()->fetch_array($consulta)){
					echo "<tr><td>".$resultados['ID']."</td> <td>".$resultados['Nombre']."</td>";
					echo "<td width='20px'><a title='edit' href='php/view/new_grupo.php?id=".$resultados['ID']."'class='btn btn-warning'><i class='icon-pencil icon-white'/></a></td>";
					echo "<td width='20px'><a title='delete' href=javascript:confirmDelete('php/data/hGrupo.php?id=".$resultados['ID']."&act=delete') class='btn btn-danger'><i class='icon-trash icon-white'/></a></td>";
					echo "</tr>";
				}?>
			</table>
			<div></div>
			<div class="buttons">
				<a title="Add" href="php/view/new_grupo.php?id=new&act=new"><img
					src="images/ico_add.jpg" alt="Add" /> </a>
			</div>
		</div>
		
		<div class="left">
			<div class="headers">TESTIMONIOS</div>
			<table class="table table-striped table-bordered table-condensed">
				<tr><td>ID</td><td>Foto</td><td colspan="3">Nombre</td></tr>
				<?php
				$test=new TestimonioDAO("","","","","");
				$consulta=$test->getTestimonios();
				while($resultados = $test->getDB()->fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$resultados['ID']."</td>";
					echo "<td><img width='40px' src='".$resultados['Foto']."'/></td>";
					echo "<td>".$resultados['Nombre']."</div></td>";
					echo "<td width='20px'><a title='edit' href='php/view/new_testimonio.php?id=".$resultados['ID']."'class='btn btn-warning'><i class='icon-pencil icon-white'/></a></td>";
					echo "<td width='20px'><a title='delete' href=javascript:confirmDelete('php/data/hTestimonio.php?id=".$resultados['ID']."&act=delete') class='btn btn-danger'><i class='icon-trash icon-white'/></a></td>";
					echo "</tr>";
				}
				?>
			</table>
			<div></div>
			<div class="buttons">
				<a title="Add" href="php/view/new_testimonio.php?id=new"><img
					src="images/ico_add.jpg" alt="Add" /> </a>
			</div>
		</div>

		<div class="right">
			<div class="headers">2. USUARIOS</div>
			<table class="table table-striped table-bordered table-condensed">
				<tr><td>ID</td><td>Nombre</td><td colspan="3">Nivel</td></tr>
				<?php
				$usuario=new UsuarioDAO("","","","");
				$consulta=$usuario->getUsuarios();					
				while($resultados = $usuario->getDB()->fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$resultados['ID']."</td>";
					echo "<td>".$resultados['usuario']."</td>";
					echo "<td colspan='3'>".$resultados['nivel']."</td>";
					echo "<td width='20px'><a title='edit' href='php/view/new_usuario.php?id=".$resultados['ID']."'class='btn btn-warning'><i class='icon-pencil icon-white'/></a></td>";
					echo "<td width='20px'><a title='delete' href=javascript:confirmDelete('php/data/hUsuario.php?id=".$resultados['ID']."&act=delete') class='btn btn-danger'><i class='icon-trash icon-white'/></a></td>";
					echo "</tr>";
				}?>
			</table>
			<div></div>
			<div class="buttons">
				<a title="Add"
					href="php/view/new_usuario.php?id=new&act=new&numimg=0"><img
					src="images/ico_add.jpg" alt="Add" /> </a>
			</div>
		</div>
		
		<div class="left">
			<div class="headers">NOTICIAS</div>
			<table class="table table-striped table-bordered table-condensed">
				<tr><td>ID</td><td colspan="3">Titulo</td></tr>
				<?php
				$not=new NoticiaDAO("", "", "");
				$consulta=$not->getNoticias();
				while($resultados = $not->getDB()->fetch_array($consulta)){
					echo "<tr><td>".$resultados['ID']."</td> <td>".$resultados['Titulo']."</td>";
					echo "<td width='20px'><a title='edit' href='php/view/new_noticia.php?id=".$resultados['ID']."'class='btn btn-warning'><i class='icon-pencil icon-white'/></a></td>";
					echo "<td width='20px'><a title='delete' href=javascript:confirmDelete('php/data/hNoticia.php?id=".$resultados['ID']."&act=delete') class='btn btn-danger'><i class='icon-trash icon-white'/></a></td>";
					echo "</tr>";
				}?>
			</table>
			<div></div>
			<div class="buttons">
				<a title="Add" href="php/view/new_noticia.php?id=new&act=new"><img
					src="images/ico_add.jpg" alt="Add" /> </a>
			</div>
		</div>

		<div class="right">
			<div class="headers">3. ARCHIVOS</div>
			<table class="table table-striped table-bordered table-condensed">
				<tr><td>ID</td><td>Nombre</td><td colspan="3">Grupo</td></tr>
				<?php
				$fic = new FicheroDAO("", "", "","");
				$consulta=$fic->getFicheros();
				while($resultados = $fic->getDB()->fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$resultados['ID']."</td>";
					echo "<td><a href=".$resultados['Ruta'].">".$resultados['Nombre']."</a></td>";
					echo "<td>".$resultados['Grupo']."</td>";
					echo "<td width='20px'><a title='delete' href=javascript:confirmDelete('php/data/hFichero.php?id=".$resultados['ID']."&act=delete') class='btn btn-danger'><i class='icon-trash icon-white'/></a></td>";			
					echo "</tr>";
				}
				?>
			</table>
			<div></div>
			<div class="buttons">
				<a title="Add" href="php/view/new_fichero.php?id=new"><img
					src="images/ico_add.jpg" alt="Add" /> </a>
			</div>
		</div>
		
		<div class="left">
			<div class="headers">VIDEOS</div>
			<table class="table table-striped table-bordered table-condensed">
				<tr><td>Nombre</td><td colspan="3">Descripcion</td></tr>
				<?php
				$vid=new VideosDAO("", "", "","");
				$consulta=$vid->getVideos();
				while($resultados = $vid->getDB()->fetch_array($consulta)){
					echo "<tr>";
					echo "<td> <a href=".$resultados['ruta'].">".$resultados['nombre']."</a></td>";
					echo "<td colspan='3'>".$resultados['descripcion']."</td>";
					echo "<td width='20px'><a title='edit' href='php/view/new_video.php?id=".$resultados['id']."'class='btn btn-warning'><i class='icon-pencil icon-white'/></a></td>";
				    echo "<td width='20px'><a title='delete' href=javascript:confirmDelete('php/data/hVideo.php?id=".$resultados['id']."&act=delete') class='btn btn-danger'><i class='icon-trash icon-white'/></a></td>";
					echo "</tr>";
				}
				?>
			</table>
			<div></div>
			<div class="buttons">
				<a title="Add" href="php/view/new_video.php?id=new"><img
					src="images/ico_add.jpg" alt="Add" /> </a>
			</div>
		</div>
		

		
		<div class="right">
			<div class="headers">GALERIA</div>
			<table class="table table-striped table-bordered table-condensed">
				<tr><td>ID</td><td>Img</td><td colspan="3">Titulo</td></tr>
				<?php
				$gal = new GaleriaDAO("", "", "","");
				$consulta=$gal->getGaleria();
				while($resultados = $gal->getDB()->fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$resultados['ID']."</td>";
					echo "<td><img width='40px' src='".$resultados['ruta']."'/></td>";						
					echo "<td>".$resultados['titulo']."</td>";
					echo "<td width='20px'><a title='delete' href=javascript:confirmDelete('php/data/hGaleria.php?id=".$resultados['ID']."&act=delete') class='btn btn-danger'><i class='icon-trash icon-white'/></a></td>";			
					echo "</tr>";
				}
				?>
			</table>
			<div></div>
			<div class="buttons">
				<a title="Add" href="php/view/new_galeria.php?id=new"><img
					src="images/ico_add.jpg" alt="Add" /> </a>
			</div>
		</div>
		
	</div>
</body>
</html>

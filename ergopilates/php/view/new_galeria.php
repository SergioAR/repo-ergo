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
	// -->
</script>
<!-- TinyMCE -->
<script type="text/javascript" src="../../lib/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		tinyMCE.init({
			// General options
			mode : "textareas",
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

			// Theme options
			theme_advanced_buttons1 : "|link,unlink|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull",
			theme_advanced_buttons2 : "bullist,numlist,|,outdent,indent,blockquote,|,link,unlink,image|,insertdate,inserttime,|,forecolor,backcolor,emotions",
			theme_advanced_buttons3 : "",		
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,

			// Example content CSS (should be your site CSS)
			content_css : "css/content.css",

			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js",

			// Style formats
			style_formats : [
				{title : 'Bold text', inline : 'b'},
				{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
				{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
				{title : 'Example 1', inline : 'span', classes : 'example1'},
				{title : 'Example 2', inline : 'span', classes : 'example2'},
				{title : 'Table styles'},
				{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
			],

			// Replace values for the template plugin
			template_replace_values : {
				username : "Some User",
				staffid : "991234"
			}
		});
	});
</script>
<!-- /TinyMCE -->
</head>
<body>
<?php if ($_GET['id']>0){
	$gal= new GaleriaDAO("", "", "", "")	;			
	$consulta=$gal->getVideo($_GET['id']);
	$galeria = $gal->getDB()->fetch_array($consulta);
?>  
	
<div class="header"></div>
	<div class="form" style="margin-left:30%">
		<form id="formulario" class="well" style="width: 400px;" action="../data/hGaleria.php" method="post">
			<div class="form">
				<div class="headers">Actualizar Imagen <a href="../../../admin.php">Volver</a></div>		
				<input type="hidden" name="act" value="update"></input>
				<input type="hidden" name="id" value="<?php echo $_GET['id']?>"></input>
				<label><font color="red">*</font> T&iacute;tulo:</label><input class="required span4" type="text"  name="titulo" value="<?php echo $video['nombre']?>"/>							
				<label><font color="red">*</font> Ruta:</label><input  class="required span4" type="text"  name="archivo" value="<?php echo $video['ruta']?>"/>	
				<label>Decripcion:</label><textarea class="span4" rows="4" name="info"><?php echo $video['descripcion']?></textarea>
				<br/><input style="margin-left:290px;" type="submit"  class="btn btn-info" value="Guardar"/> 	
			</div>
		</form>	
	</div>
<?php }else{?>
	<div class="header"></div>
	<div class="form" style="margin-left:30%">
		<form id="formulario" class="well" style="width: 400px;" action="../data/hGaleria.php" method="post" enctype="multipart/form-data" >
			<div class="form">
				<div class="headers">Subir Imagen <a href="../../admin.php">Volver</a></div>		
				<input type="hidden" name="act" value="create"></input>
				<label><font color="red">*</font> T&iacute;tulo::</label><input class="required span4" type="text"  name="titulo"/>							
				<label><font color="red">*</font> Archivo:</label><input class="required span4" type="file"  name="archivo"/>					
				<label>Decripcion:</label><textarea class="span4" rows="4" name="info"></textarea>
				<br/><input style="margin-left:290px;" type="submit"  class="btn btn-info" value="Guardar"/> 		
			</div>
		</form>	
	</div>
<?php }?>
</body>
</html>
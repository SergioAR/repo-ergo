<?php
$url="../../admin.php";

function __autoload($class_name) {
	require_once $class_name.".php";
}
	
	if($_POST['act']=='create'){
		$video = new VideosDAO("", $_POST['nombre'],$_POST['descripcion'],$_POST['ruta']);
		$video->addVideo();
		
	}else if($_POST['act']=='update'){
		$video = new VideosDAO($_POST['id'], $_POST['nombre'],$_POST['descripcion'],$_POST['ruta']);
		$video->updateVideo();
		
	}else if($_GET['act']=='delete'){
		$video = new VideosDAO($_GET['id'],"","","");
		$video->deleteVideo();
	}

header("Location:".$url);
?>
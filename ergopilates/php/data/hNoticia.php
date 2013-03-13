<?php
	$url="../../admin.php";
	
	function __autoload($class_name) {
		require_once $class_name.".php";
	}
		
	if($_POST['act']=='create'){	
		$not = new NoticiaDAO("",$_POST['titulo'],$_POST['texto']);
		$not->addNoticia();	
	}else if($_POST['act']=='update'){
		$not = new NoticiaDAO($_POST['id'],$_POST['titulo'],$_POST['texto']);
		$not->updateNoticia();
		
	}else if($_GET['act']=='delete'){
		$not = new NoticiaDAO($_GET['id'],"","");
		$not->deleteNoticia();
	}
	
	
	header("Location:".$url);
?> 
<?php
	$url="../../admin.php";
	
	function __autoload($class_name) {
		require_once $class_name.".php";
	}
		
	if($_POST['act']=='create'){	
		$not = new GrupoDAO("",$_POST['nombre']);
		$not->addGrupo();	
	}else if($_POST['act']=='update'){
		$not = new GrupoDAO($_POST['id'],$_POST['nombre']);
		$not->updateGrupo();
		
	}else if($_GET['act']=='delete'){
		$not = new GrupoDAO($_GET['id'],"");
		$not->deleteGrupo();
	}
	
	
	header("Location:".$url);
?> 
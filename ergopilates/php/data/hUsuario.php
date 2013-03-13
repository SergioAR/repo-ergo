<?php
	$url="../../admin.php";
	
	function __autoload($class_name) {
		require_once $class_name.".php";
	}
		
	if($_POST['act']=='create'){	
		$user = new UsuarioDAO("",$_POST['usuario'], md5($_POST['pass']),$_POST['nivel']);
		$user->addUsuario();	
		//guardamos los permisos sobre los grupos marcados
		$last=mysql_insert_id();
		foreach ($_POST['grupo'] as $grupo){
			$user->addPermisos($last,$grupo);
		}
		
	}else if($_POST['act']=='update'){
		$user = new UsuarioDAO($_POST['id'],$_POST['usuario'], md5($_POST['pass']),$_POST['nivel']);
		$user->updateUsuario();	

		$user->deletePermisos();
		foreach ($_POST['grupo'] as $grupo){
			$user->addPermisos($_POST['id'],$grupo);
		}
		
	}else if($_GET['act']=='delete'){
		$user = new UsuarioDAO($_GET['id'],"", "","");
		$user->deleteUsuario();
		$user->deletePermisos();
	}
	
	header("Location:".$url);
?>
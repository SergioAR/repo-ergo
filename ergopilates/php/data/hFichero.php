<?php
	$url="../../admin.php";
	
	function __autoload($class_name) {
		require_once $class_name.".php";
	}
	$ruta="../../docs/";
	$subido=false;
		
	if($_POST['act']=='create'){	
		
		$nombre = md5(rand() * time()).".".substr(strrchr($_FILES['archivo']['name'],'.'),1);
		
		if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
			copy($_FILES['archivo']['tmp_name'], $ruta.$nombre);
			$subio = true;
		}
		
		if($subido=true){
			$fic = new FicheroDAO("",$_POST['nombre'],$_POST['grupo'],"docs/".$nombre);
			$fic->addFichero();
		}else{
			echo "error";
		}	
	}else if($_POST['act']=='update'){
		$fic = new FicheroDAO($_POST['id'],$_POST['titulo'],$_POST['grupo']);
		$fic->updateFichero();
		
	}else if($_GET['act']=='delete'){
		$fic = new FicheroDAO($_GET['id'],"","");
		$fic->deleteFichero();
	}
	
	
	header("Location:".$url);
?> 
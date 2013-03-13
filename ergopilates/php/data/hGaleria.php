<?php
	$url="../../admin.php";
	
	function __autoload($class_name) {
		require_once $class_name.".php";
	}
	
	$ruta="../../galeria/";
	$subido=false;
		
	if($_POST['act']=='create'){	
		$nombre = md5(rand() * time()).".".substr(strrchr($_FILES['archivo']['name'],'.'),1);
		
		if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
			copy($_FILES['archivo']['tmp_name'], $ruta.$nombre);
			$subido = true;
		}
		
		if($subido=true){
			$gal = new GaleriaDAO("",$_POST['titulo'],$_POST['info'],"galeria/".$nombre);
			$gal->addGaleria();
		}else{
			echo "error";
		}
		
		
	}else if($_POST['act']=='update'){
		$gal = new GaleriaDAO($_POST['id'],$_POST['titulo'],$_POST['texto']);
		$gal->updateGaleria();
		
	}else if($_GET['act']=='delete'){
		$gal = new GaleriaDAO($_GET['id'],"","","");
		$gal->deleteGaleria();
	}
		
	header("Location:".$url);
?> 
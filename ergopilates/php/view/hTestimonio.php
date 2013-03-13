<?php
	$url="../../admin.php";
	
	function __autoload($class_name) {
		require_once $class_name.".php";
	}
		
	if($_POST['act']=='create'){
		$path="../../fotos/";
		$imagen = md5(rand() * time()).$_FILES['foto']['name'];
		
		if($imagen!=""){
			move_uploaded_file($_FILES['foto']['tmp_name'], $path.$imagen);
		}
			
		$test = new TestimonioDAO("",$_POST['nombre'],$_POST['actividad'],$_POST['texto'],"fotos/".$imagen);
		$test->addTestimonio();
	
	}else if($_POST['act']=='update'){
		
		if ($_FILES['foto']['name'] == ""){
			$imagen = $_POST['fotoaux'];
			$test = new TestimonioDAO($_POST['id'],$_POST['nombre'],$_POST['actividad'],$_POST['texto'],$imagen);
		}else {
			$path="../../fotos/";
			$imagen = md5(rand() * time()).$_FILES['foto']['name'];
			
			if($imagen!=""){
				move_uploaded_file($_FILES['foto']['tmp_name'], $path.$imagen);
			}
			
			$test = new TestimonioDAO($_POST['id'],$_POST['nombre'],$_POST['actividad'],$_POST['texto'],"fotos/".$imagen);
		}
		
		
		$test->updateTestimonio();
		
	}else if($_GET['act']=='delete'){
		$test = new TestimonioDAO($_GET['id'],"","","","");
		$test->deleteTestimonio();
	}
	
	
	header("Location:".$url);
?>
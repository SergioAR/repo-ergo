<?php
session_start();
function __autoload($class_name) {
	require_once $class_name.".php";
}
	$url="../../aclientes.php";
	$db = new MySQL();

	$usuario = $_POST['usuario'];
	$pwd = md5($_POST['clave']);
	
	$string="SELECT * FROM usuarios where usuario='".$usuario."' AND pass='".$pwd."';";
	
	$consulta=$db->consulta($string);	
	$x=$db->num_rows($consulta);
	
	if($x>0){
		$resultados = $db->fetch_array($consulta);
		$_SESSION['userID']=$resultados['ID'];
		$_SESSION['user']=$resultados['usuario'];
		$_SESSION['nivel']=$resultados['nivel'];
		$_SESSION['log_error']=0;		
	}else{
		$_SESSION['log_error']=1;
	}	
	header("Location:".$url);
?>
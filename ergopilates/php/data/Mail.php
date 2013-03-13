<?php
session_start();

$test = $_POST["test"];

if ($test==1){
	//se mandan a llamar las variables con metodo POST
	$nombre = $_POST["nombre_p"];
	$mail = $_POST["email_p"];
	$telefono = $_POST["telefono_p"];
	$actividad = $_POST["actividad"];
	$consulta = $_POST["consulta_p"];

	//se incluyen las variables del form en el mensaje
	$mensaje="Peticion de contacto a traves de Ergopilates.\n\n";
	$mensaje.="Nombre: ". $nombre ."\n";
	$mensaje.="E-MAIL: ".$mail." \n\n";
	$mensaje.="Telfono: ".$telefono." \n";
	$mensaje.="Actividad".$actividad."\n";
	$mensaje.="Consulta:\n ".$consulta." \n";
}
if ($test==2){
	//se mandan a llamar las variables con metodo POST
	$nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];
	$mail = $_POST["email"];
	$consulta = $_POST["consulta"];

	//se incluyen las variables del form en el mensaje
	$mensaje="Peticion de contacto a traves de Ergopilates.\n\n";
	$mensaje.="Nombre: ". $nombre ."\n";
	$mensaje.="Telfono: ".$telefono." \n";
	$mensaje.="E-MAIL: ".$mail." \n\n";
	$mensaje.="Consulta:\n ".$consulta." \n";
}

//PARA QUE NO SE VEA EL MAIL DEL HOSTING AUNQUE HABRA QUE CONFIGURARLO ALL TAMBIN O EN EL PHP.INI
$cabecera = 'From:info@ergopilates.com';
//cuenta de correo a donde quieren q llegue el formulario (POR AHORA NUESTROS E-MAILS DESPUES EL DE YAHOO DEL CLIENTE)
$destino = "info@ergopilates.es";

$asunto ="Formulario de contacto Ergopilates";
if (mail($destino,$asunto,$mensaje,$cabecera)){
	$_SESSION['mail_error']=2;
} else {
	$_SESSION['mail_error']=1;
}

header("Location:".$_SERVER['HTTP_REFERER']);
?>
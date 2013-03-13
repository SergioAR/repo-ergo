<?php 
	function __autoload($class_name) {
		require_once 'php/data/'.$class_name.".php";
	}
	$mail_msg='<div id="mail_error" class="alert alert-error hide fade in">
	    		<a class="close" onclick=\'$("#mail_error").hide();\' data-dismiss="alert">x</a>
	   			<strong>Error!</strong> Fallo al enviar el correo. Int&eacute;ntelo de nuevo.
	  		  </div>
	
			<div id="mail_success" class="alert alert-success hide fade in">
		    	<a class="close" onclick=\'$("#mail_success").hide();\' data-dismiss="alert">x</a>
		   		El correo se ha mandado correctamente.
		    </div>';
?>
<link rel="stylesheet" href="style.css" type="text/css"/>
<link type='text/css' href='lib/basic/css/basic.css' rel='stylesheet' media='screen' />
<link type='text/css' href='lib/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen' />
<link type='text/css' href='lib/bootstrap/css/bootstrap-responsive.min.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='lib/basic/js/jquery.js'></script>
<script type='text/javascript' src='lib/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='lib/basic/js/basic.js'></script>
<script type='text/javascript' src='lib/bootstrap/js/bootstrap.js'></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="lib/jquery.validate.js"></script>
<script type="text/javascript">
 function load(){
	<?php if(isset ($_SESSION['mail_error']) && $_SESSION['mail_error']==1){
		//comprobamos si se ha producido algun error al enviar el mail
				echo '$("#mail_error").show();';
				$_SESSION['mail_error']=0;
				
			}else if(isset ($_SESSION['mail_error']) && $_SESSION['mail_error']==2){
				//el mail se ha mandado correctamente
				echo '$("#mail_success").show();';
				$_SESSION['mail_error']=0;
			}
			
			if(isset ($_SESSION['log_error']) && $_SESSION['log_error']==1){
				//error de login
				echo '$("#error_login").show();';
				$_SESSION['log_error']=0;
			}
			
			echo "ssss";
			?>
 }
</script>
<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="copyright" content="Ergopilates" />
<title>Ergopilates</title>
<meta name="title" content="Ergopilates">
<meta name="DC.Title" content="Ergopilates">
<meta http-equiv="title" content="Ergopilates">
<meta name="DC.Creator" content="www.altas-buscadores.com">
<meta name="keywords" content="ergopilates,pilates,gimnasio,Andalucia,Málaga">
<meta http-equiv="keywords" content="ergopilates,pilates,gimnasio,Andalucia,Málaga">
<meta name="description" content="Mira nuestra galería de imágenes y videos.">
<meta http-equiv="description" content="Mira nuestra galería de imágenes y videos.">
<meta http-equiv="DC.Description" content="Mira nuestra galería de imágenes y videos.">
<meta name="author" content="">
<meta name="DC.Creator" content="">
<meta name="vw96.objectype" content="Document">
<meta name="resource-type" content="Document">
<meta name="distribution" content="all">
<meta name="robots" content="all">
<meta name="revisit" content="15 days">


<link rel="stylesheet" href="style.css" type="text/css"/>
<link type='text/css' href='lib/basic/css/basic.css' rel='stylesheet' media='screen' />
<link rel="stylesheet" href="lib/video/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link type='text/css' href='lib/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen' />

<!-- IE6 "fix" for the close png image -->
<!--[if lt IE 7]>
<link type='text/css' href='css/basic_ie.css' rel='stylesheet' media='screen' />
<![endif]-->
<script type='text/javascript' src='lib/basic/js/jquery.js'></script>
<script type='text/javascript' src='lib/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='lib/basic/js/basic.js'></script>
<script type='text/javascript' src='lib/bootstrap/js/bootstrap.js'></script>

<script src="lib/jquery.validate.js" type="text/javascript"></script>
<?php 
function __autoload($class_name) {
	require_once 'php/data/'.$class_name.".php";
}
?>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
<script src="lib/galleria/galleria-1.2.6.min.js"></script>
<script src="lib/video/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		 $("#formulario2").validate();
		 
		$("area[rel^='prettyPhoto']").prettyPhoto();
		
		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
		$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
	
		$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
			custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
			changepicturecallback: function(){ initialize(); }
		});
	
		$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
			custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
			changepicturecallback: function(){ _bsap.exec(); }
		});
	});

    function youtubeFeedCallback(json){
        document.write('<img src="' + json["data"]["thumbnail"]["sqDefault"] + '">');
    }

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
    			?>
     }

</script>

</head>

<body onload="load();">
	<div id="content"> 
		<br />
		<div id="mail_error" class="alert alert-error hide fade in">
	    		<a class="close" onclick='$("#mail_error").hide();' data-dismiss="alert">x</a>
	   			<p><strong>Error!</strong> Fallo al enviar el correo. Int&eacute;ntelo de nuevo.</p>
	  		  </div>
	
			<div id="mail_success" class="alert alert-success hide fade in">
		    	<a class="close" onclick='$("#mail_success").hide();' data-dismiss="alert">x</a>
		   		<p>El correo se ha mandado correctamente.</p>
		    </div>
		    
		<div id="logo"><a href="index.php"><img src="images/logo.jpg" /></a></div> 
		<br />
		<div id="header"></div>
		<div id="nav"><?php include 'php/includes/nav.php';?></div>
		<div id="rigth-panel"><?php include_once 'php/includes/panel.php';?></div>
		
		<div id="servicios">
			<h1>Galeria</h1><br />
			<div id="hr"></div>
			<br />
			<div id="servicios_text">
				<div id="galleria">
					<?php 
						$gal = new GaleriaDAO("", "", "","");
						$consulta=$gal->getGaleria();
						while($resultados = $gal->getDB()->fetch_array($consulta)){?>						
							<a
								href="<?php echo $resultados['ruta']?>">
								<img style="width: auto; height: auto;" title="<?php echo $resultados['titulo']?>"
								alt="<?php echo $resultados['info']?>"
								src="<?php echo $resultados['ruta']?>">
							</a>
					<?php }?>
				</div>
				<script type="text/javascript">
					Galleria.loadTheme('lib/galleria/themes/classic/galleria.classic.min.js');
					$('#galleria').galleria();
	       	 	</script>
			</div>
			<br/><br/>
			
			<h1>Videos</h1><br />
			<div id="hr"></div>
		
		<!-- VIDEOS -->
		<div id="main">
			<div class="fleft">
				<ul class="gallery clearfix">
					<li><a
						href="http://www.adobe.com/products/flashplayer/include/marquee/design.swf?width=792&amp;height=294"
						rel="prettyPhoto[flash]" title="Flash 10 demo"></a></li>
				</ul>
			</div>
			<div class="fleft" style="margin-left:-100px;">	
				<ul class="gallery clearfix">
				<?php 
					function getMiniaturaYoutube($url){
						$regexp= "http:\/\/www\.youtube\.com\/watch\?v=(.*)(.*)";
						if(preg_match_all("/$regexp/siu", $url, $matches)){
							return $matches[1][0];
						}	
					}
					
					function getUrl($url){
						return explode("&", $url);
					}
				
					$vid = new VideosDAO("", "", "","");
					$consulta=$vid->getVideos();
					while($resultados = $vid->getDB()->fetch_array($consulta)){
						$urlvideo = getUrl($resultados['ruta']);
						$miniatura_youtube = getMiniaturaYoutube($urlvideo[0]);?>
						<li><a href="<?php echo $resultados['ruta']?>" title="<?php echo $resultados['descripcion']?>" rel="prettyPhoto" title="<?php echo $resultados['nombre']?>">
							<?php echo '<img src="http://i1.ytimg.com/vi/'.$miniatura_youtube.'/default.jpg" />'?>
						</a></li>
				<?php }?>
				</ul>
			</div>
		</div>
		</div>
		<div class="hr"></div>
				<div style="clear: both; height: 70px;"><p id="foot-copy">Copyright &copy; Ergopilates 2012 Todos los derechos reservados.<br/>Powered by  <a href="mailto:agioWeb@gmail.com">agioWeb S.L.</a></p></div>
	</div>
		<div style="clear: both;height:30px;"></div>
</body>
</html>

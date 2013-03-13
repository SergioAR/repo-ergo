<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="copyright" content="Ergopilates" />
	<meta name="robots" content="all,index,follow" />
	<meta name="keywords" content="ergopilates,pilates,gimnasio,Andalucia,M&aacute;laga"/>
	<meta name="DC.title" content="Ergopilates - Conoce tu cuerpo y lib&eacute;rate" />
	<meta name="description" content="En ERGOPILATES creemos en la necesidad de un ejercicio personalizado.
	Con el entrenamiento personalizado se va a conseguir una serie de beneficios 
					que son m&aacute;s complicados alcanzar en una clase colectiva.
					Contamos con una sala exclusiva de entrenamiento personal, 
					dotada de una m&aacute;quina de Pilates, bicicleta Cardgirus y KINESIS." />
	<title>Ergopilates</title>
	<?php include 'php/includes/scripts.php';?>
</head>

<body onload="load();">
	<div id="content">
		<br/>
	    <?php echo $mail_msg;?>	    
				<div id="logo"><a href="index.php"><img src="images/logo.jpg"/></a></div>
		<br/>
		<div id="header"></div>
		<div id="nav"><?php include 'php/includes/nav.php';?></div>
		<div id="rigth-panel"><?php include'php/includes/panel.php';?></div>
		
		<div id="c1"><a style="color:black;" href="epersonal.php"><img src="images/personalpower.gif"/></a></div>
		<div id="c2"><a href=" http://fitnessevolution.blogspot.com.es/" target="_blank" ><img src="images/logopatr.png"></img></a>
			<a href="http://ergopilatesytriatlon.blogspot.com.es/" target="_blank" ><img src="images/triatlon_pilates2.png"></img></a>
		</div>
		<div id="c3">
			<a href="testimonios.php" id="see-all"> Ver todos </a>
			<img src="images/bgtestimonios.jpg"></img>
			<div id='content-modal'>
				<?php
					$test=new TestimonioDAO("","","","","");
					$consulta=$test->getTestimoniosTop();
					$x=1;
					while($resultados = $test->getDB()->fetch_array($consulta)){
				?>
						<div  id='basic-modal0<?php echo $x;?>'>											
								<div id="c3<?php echo $x;?>">
									<a href="#" class='basic0<?php echo $x;?>'><img class="test_foto" src="<?php echo $resultados['Foto'];?>"/></a>
									<br/>
									<span><b><?php echo $resultados['Nombre'];?></b><br/><font color="brown"><?php echo $resultados['Actividad'];?></font></span>
								</div>
								<div style="width:460px; padding:12px;" id="basic-modal-content0<?php echo $x;?>">
									<h3 >Testimonio</h3>
									<img class="testimonio_foto" src="<?php echo $resultados['Foto'];?>"/>							
									<div class="testimonio_nombre"><p><?php echo $resultados['Nombre'];?></p></div>
									<div class="testimonio_act"><p><?php echo $resultados['Actividad'];?></p></div>
									<div style="clear: both;height:20px;"></div>
									<div class="testimonio_test"><p style="text-align: justify;"><?php echo $resultados['Testimonio'];?></p></div>		
								</div>
							</div>
				<?php
					$x++;
					}
				?>
			</div>
		</div>
		<div id="c4"><!-- <img src="images/shoots.jpg"></img>-->		
		 
			<img src="images/bgnoticias.jpg"></img>
			<?php
			
			$c41='<div id="c41">
				<marquee direction="up" style="height:170px;"
				onmouseover="this.scrollAmount=\'0\'" scrollamount="1" onmouseout="this.scrollAmount=\'2\'">';
			$c42='<div id="c42">
				<marquee  direction="up" style="height:170px;"
				onmouseover="this.scrollAmount=\'0\'" scrollamount="1" onmouseout="this.scrollAmount=\'2\'">';
			$c43='<div id="c43">
				<marquee  direction="up" style="height:170px;"
				onmouseover="this.scrollAmount=\'0\'" scrollamount="1" onmouseout="this.scrollAmount=\'2\'">';			
			$cend='</marquee></div>';
			
				$not=new NoticiaDAO("", "", "");
				$consulta=$not->getNoticias();
				$x=1;				
				while($resultados = $not->getDB()->fetch_array($consulta)){
					if($x==1){
						$c41=$c41."<div><div class='tnoticia'>".$resultados['Titulo']."<div class='cnoticia'>".$resultados['Noticia']."</div></div></div>
						<div style='clear: both;height:10px;'></div>";
					}else if($x==2){
						$c42=$c42."<div><div class='tnoticia'>".$resultados['Titulo']."<div class='cnoticia'>".$resultados['Noticia']."</div></div></div>
						<div style='clear: both;height:10px;'></div>";
					}else{
						$c43=$c43."<div><div class='tnoticia'>".$resultados['Titulo']."<div class='cnoticia'>".$resultados['Noticia']."</div></div></div>
						<div style='clear: both;height:10px;'></div>";
					}	
								
			 		$x++; 
			 		if($x>3){$x=1;}	
				}
				
				echo $c41.$cend;
				echo $c42.$cend;
				echo $c43.$cend;				
				?>
		</div>		
		<div class="hr"></div>
				<div style="clear: both; height: 70px;"><p id="foot-copy">Copyright &copy; Ergopilates 2012 Todos los derechos reservados.<br/>Powered by  <a href="mailto:agioWeb@gmail.com">agioWeb S.L.</a></p></div>
	</div>
	
	<div style="clear: both;height:30px;"></div>
</body>
</html>
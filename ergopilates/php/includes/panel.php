<!-- POP-UPS -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<script type="text/javascript">
	$(document).ready(function(){
	    $("#formulario2").validate();
	  }); 
</script>
<div id='content-modal'>
	<!-- cita -->
	<div id='basic-modal2' >
		<a href='#' class='basic2' onclick="$('#basic-modal-content2').modal('show');" style="text-decoration: none"><img id="cita" src="images/cita.jpg"></img></a>
		<!-- modal content -->
		<div id="basic-modal-content2" style="width: 560px; height: 480px;">
			<form id="formulario2"  class="" action="php/data/Mail.php" method="post">
				<input type="hidden" name="test" value="1"/>			
				<h2 style="color:white;">Pedir cita</h2>
				<p>Rellena el formulario y nos pondremos en contacto contigo.</p><br/>	
				<table>
					<tr><td><font color="red">*</font> Nombre: </td><td><input class="required span4" type="text" name="nombre_p"/></td></tr>
					<tr><td><font color="red">*</font> Email: </td><td><input class="required span4" type="text"name="email_p"/></td></tr>
					<tr><td>Tel&eacute;fono:</td><td><input class="span4" type="text"  name="telefono_p"/></td></tr>
					<tr><td>Actividad:</td>
					<td><select name="actividad"><option value="Entrenamiento Personal">Entrenamiento Personal</option>
								<option value="Etto. Personal domicilio">Etto. Personal domicilio</option>
								<option value="Power Plate">Power Plate</option>
								<option value="Pilates">Pilates</option>
					</select></td></tr>
					<tr><td><font color="red">*</font> Consulta:</td><td><textarea class="required span5" rows="8"  name="consulta_p"></textarea><br/></td></tr>
					<tr><td colspan="2" align="right"><input type="submit" class="btn btn-info" value="Enviar" /></td></tr>
				</table>
			</form>
			<br/><br/>
		</div>
	</div>
	<!-- estetica -->
	<div id='basic-modal'>
		<a href='http://eandbcentrodebelleza.es/contacto/' target="blank"  style="color:black; border:0px;"><img id="estetica" src="images/estetica.jpg"></img></a>		
	</div>
				
	<!-- preload the images -->
	<div style='display:none'>
		<img src='lib/basic/img/basic/x.png' alt='' />
	</div>
</div>
 <!--// POP-UPS -->
 
<div id="siguenos">
	<img src="images/siguenos.jpg"></img>
	<div id="siguenos-content">
		<div id="sc1"><a target="blank" href="http://www.facebook.com/ergopilates"><img src="images/fb.gif"></img></a></div>
		<div id="sc2"><a target="blank" href="http://www.twitter.com/ergopilates"><img src="images/tw.gif"></img></a></div>
		<div id="sc3"><a target="blank" href="http://www.youtube.com/user/jfentrenadores"><img src="images/yt.gif"></img></a></div>
		<div id="sc4"><span>Hazte nuestro fan en <a target="blank" href="http://www.facebook.com/ergopilates">Facebook</a>, 
		visita nuestro canal de <a target="blank" href="http://www.youtube.com/user/jfentrenadores">Youtube</a> y s&iacute;guenos en
		<a target="blank" href="http://www.twitter.com/ergopilates">Twitter</a></span></div>
	</div>
</div>
<div id="blog">
	<img src="images/blog.jpg"></img>
	<div id="blogger"><a target="blank" href="http://www.ergopilatesmalaga.blogspot.com.es" id="blog_link"><img src="images/blog2.jpg"></img></a></div>
</div>
<div id="video">
	<img src="images/video.jpg"></img>
	<div id="i_video_div">
		<object>
			<param name="movie" value="http://www.youtube.com/v/pRWMhkk3Ozs?version=3&feature=player_detailpage"/>
			<param name="allowFullScreen" value="true"/>
			<param name="allowScriptAccess" value="always"/>
			<param name="wmode" value="transparent"/>
			
			<embed id='i_video' width='250' height='250'
				src="http://www.youtube.com/v/pRWMhkk3Ozs?version=3&feature=player_detailpage" 
				type="application/x-shockwave-flash" 
				allowfullscreen="true" allowScriptAccess="always"
				wmode="transparent">
		</object>
	</div> 
</div>
<div id="social">			
	<img src="images/pluginfb.jpg"></img>	
	<div id="fb-div">			
	<div class="fb-like-box" data-href="http://www.facebook.com/pages/Ergopilates/101730079863656" 
	data-width="252" data-height="260" data-show-faces="true" data-stream="false" data-header="false"></div>
	</div>
</div>

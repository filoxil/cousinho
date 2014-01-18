<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<title>Super Planes en  NUEVA YORK :: VIVE NUEVA YORK :: </title>
<script type="text/javascript" src="js/jquery.js"></script>



<style>
.img_thumb{
	float:left;
	border: 1px solid #ccc;
}
.img_desc{
	font-family: "Georgia", Times New Roman, Times, serif;
	font-style: oblique;
	font-size:24px;
	text-align:center;
	vertical-align:middle;
    width: 290px;
    height: 160px;
    position: absolute;
    z-index: 2;
    background-color:#000;
    opacity: 0.8;
    display: none;
	color:#FFF;
}

.img_thumb img{z-index: -1;}

</style>
<script>


$(document).ready(function(){
	//parametros principales
	
	var contenidoHTML = '<button onclick=\"closeModal()\">Cerrar</button>';
	
	var ancho = 980; 
	var alto =$(window).height();
	$(window).resize(function(){
		// dimensiones de la ventana
		var wscr = $(window).width();
		var hscr = $(window).height();

		// estableciendo dimensiones de background
		$('#capa_sombra').css("width", wscr);
		$('#capa_sombra').css("height", hscr);
		
		// definiendo tamaño del contenedor
		$('#capa_ventana').css("width", ancho+'px');
		$('#capa_ventana').css("height", alto-100 +'px');
		
		// obtiendo tamaño de contenedor
		var wcnt = $('#capa_ventana').width();
		var hcnt = $('#capa_ventana').height();
		
		// obtener posicion central
		var mleft = ( wscr - wcnt ) / 2;
		var mtop = ( hscr - hcnt ) / 2;
		
		// estableciendo posicion
		$('#capa_ventana').css("left", mleft+'px');
		$('#capa_ventana').css("top", mtop+'px');
	});
	
	$(window).keyup(function(event){
   		if (event.keyCode == 27) {
	        closeModal();
   		}
	});
	
  <?PHP
    $superplan = $_GET["spl"];

    if ($superplan != ""){
      echo "openModal2('" . $superplan . ".html');";
    }
    
  ?>

 });




$(document).ready(function(){
var target = null;
$('.img_thumb').hover(function(e){
    target = $(this);
    $(target[0].firstElementChild).fadeIn(200);
}, function(){
    $(target[0].firstElementChild).fadeOut(200);
})
	
 });
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function openModal2(num){
		
		var wscr = $(window).width();
		var hscr = $(window).height();
		
		$('#capa_ventana').load(num);
		
		$('#capa_sombra').css("width", wscr);
		$('#capa_sombra').css("height", hscr);
		$('#capa_ventana').css("display",'block');
		$('#capa_sombra').css("display",'block');
		$('#capa_ventana').show(1000);
		$('#capa_sombra').show(2000);
		
		$(window).resize();
		
		document.body.style.overflow = 'hidden';
		
	};

function closeModal(){
	$('#capa_ventana').css("display",'none');
	$('#capa_sombra').css("display",'none');
	document.body.style.overflow = 'auto';
	$('#capa_ventana').load('blanco.html');
}
</script>

<style>
.capa_sombra{position:fixed;left:0;top:0;background-color:#000;opacity:0.6;filter:alpha(opacity=60);z-index:1000;display:none; text-align:center;}
.capa_ventana{position:fixed; font-family:arial;font-size:1em; top:10px; height:95%;border:0.05em solid black;overflow:auto;background-color:#fff;z-index:1001;display:none;}
</style>

</head>

<body onload="MM_preloadImages('imagenes/btn2_facebook.jpg','imagenes/btn2_twitter.jpg','imagenes/superplanes/btn_menu/btn2_maletas.jpg','imagenes/superplanes/btn_menu/btn2_taxi.jpg','imagenes/superplanes/btn_menu/btn2_iphone.jpg','imagenes/superplanes/btn_menu/btn2_contrastes.jpg','imagenes/superplanes/btn_menu/btn2_limusinas.jpg','imagenes/superplanes/btn_menu/btn2_helicoptero.jpg','imagenes/superplanes/btn_menu/btn2_shopping_outles.jpg','imagenes/superplanes/btn_menu/btn2_washington.jpg','imagenes/superplanes/btn_menu/btn2_niagara.jpg')" >
<div id="capa_sombra" class="capa_sombra" onclick="closeModal();"></div>
<div id="capa_ventana" class="capa_ventana">
	<table width="100%">
    	<tr>
            <td width="20"><a href="javascript:eval(0):" ><img src="img/x.png" onClick="closeModal();" border="0" /></a></td>
		</tr>
	</table>
</div>
<div id="cuerpo">
	<div id="cabecera">
		<? include 'inc/cabecera.php';?>
	</div>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="50" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><table width="980" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="300" valign="top">
        
        <span class= "txt_contenido_secciones"><strong><em>De España a Nueva<br> 
            York, los Primos<br> 
            estamos contigo <br>
            before, during and <br>after para que vivas <br>tu viaje a tope!</em></strong></span><br>
            <br>
            
            <span class= "txt_titulo_seccion"><strong><em>Pero los Primos <br>somos aún más…</em></strong></span>            </td>
        <td width="40">&nbsp;</td>
        <td width="300" valign="top"><span class= "txt_contenido_secciones"><em>¿Necesitas contratar otros servicios en NY como rutas, limusinas o helicópteros? ¿Un iPhone americano para llamar a casa de tu madre, ver los mejores restaurantes o las tiendas vinatge más cercanas? ¿Quieres que nuestra Tía Matilde limpie el apartamento más días o se quede con los niños en casa para que podáis ir a ver ese musical que tanto os gusta? ¿Necesitas que nuestro taxi te recoja en el apartamento para ir al aeropuerto? ¿Quieres descubrir algunos sitios increíbles fuera de Manhattan en una súper ruta por los barrios más famosos de NY?</em></span></td>
        <td width="40">&nbsp;</td>
        <td width="300" valign="top"><span class= "txt_contenido_secciones"><em>Cuenta con ello!!! Son muchos los Primos que han tenido alguna dificultad para ponerse en contacto con las empresas que ofrecen estos servicios en NY o que al contratarlas desde España, han visto como su precio se disparaba. Por todo esto, hemos decidido ayudaros a contratar algunos de los servicios más comunes en NY, para que ya desde España llevéis todo bien organizado sin tener que preocuparos de nada.</em></span><br><br>
            
            <span class= "txt_contenido_secciones"><em>Comprueba a continuación nuestros servicios en detalle.</em></span> </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="3" background="imagenes/fnd_filete.jpg"></td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><table width="910" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="50"><table width="910" height="160" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="290" valign="top"><a  href="javascript:openModal2('superplanes_maletas.html');"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('maletas','','imagenes/superplanes/btn_menu/btn2_maletas.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_maletas.jpg" alt="Servicio de maletas" name="maletas" width="290" height="160" border="0" id="maletas" /></a></td>
              <td width="20">&nbsp;</td>
              <td width="290"><a  href="javascript:openModal2('superplanes_taxi.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('taxi','','imagenes/superplanes/btn_menu/btn2_taxi.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_taxi.jpg" alt="Taxi al aeropuerto" name="taxi" width="290" height="160" border="0" id="taxi" /></a></td>
              <td width="20">&nbsp;</td>
              <td width="290" valign="top"><a  href="javascript:openModal2('superplanes_iphone.html');"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('iphone','','imagenes/superplanes/btn_menu/btn2_iphone.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_iphone.jpg" alt="Servicio de Iphone" name="iphone" width="290" height="160" border="0" id="iphone" /></a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="20"></td>
      </tr>
      <tr>
        <td height="20"><table width="910" height="160" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="290" valign="top"><a  href="javascript:openModal2('superplanes_contrastes.html');"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contrastes','','imagenes/superplanes/btn_menu/btn2_contrastes.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_contrastes.jpg" alt="Tour contrastes" name="contrastes" width="290" height="160" border="0" id="contrastes" /></a></td>
              <td width="20">&nbsp;</td>
              <td width="290"><a  href="javascript:openModal2('superplanes_limusina.html');"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('limusinas','','imagenes/superplanes/btn_menu/btn2_limusinas.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_limusinas.jpg" alt="Servicio de limusinas" name="limusinas" width="290" height="160" border="0" id="limusinas" /></a></td>
              <td width="20">&nbsp;</td>
              <td width="290" valign="top"><a  href="javascript:openModal2('superplanes_helicoptero.html');"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('helicoptero','','imagenes/superplanes/btn_menu/btn2_helicoptero.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_helicoptero.jpg" alt="Manhattan en helicoptero" name="helicoptero" width="290" height="160" border="0" id="helicoptero" /></a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="20"></td>
      </tr>
      <tr>
        <td height="20"><table width="910" height="160" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="290" valign="top"><a  href="javascript:openModal2('superplanes_shopping_outles.html');"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('shopping','','imagenes/superplanes/btn_menu/btn2_shopping_outles.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_shopping_outles.jpg" alt="Shopping Outles" name="shopping" width="290" height="160" border="0" id="shopping" /></a></td>
            <td width="20">&nbsp;</td>
            <td width="290"><a  href="javascript:openModal2('superplanes_washington.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('washington','','imagenes/superplanes/btn_menu/btn2_washington.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_washington.jpg" alt="Ir a Washington" name="washington" width="290" height="160" border="0" id="washington" /></a></td>
            <td width="20">&nbsp;</td>
            <td width="290" valign="top"><a  href="javascript:openModal2('superplanes_niagara.html');"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('niagara','','imagenes/superplanes/btn_menu/btn2_niagara.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_niagara.jpg" alt="Cataratas del Niagara" name="niagara" width="290" height="160" border="0" id="niagara" /></a></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="20"></td>
      </tr>
      <tr>
        <td height="20"><table width="910" height="160" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="290" valign="top"><a  href="javascript:openModal2('superplanes_empire.html');"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('empire','','imagenes/superplanes/btn_menu/btn2_empire.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_empire.jpg" alt="Tickets Empire State" name="empire" width="290" height="160" border="0" id="empire" /></a></td>
            <td width="20">&nbsp;</td>
            <td width="290"><a  href="javascript:openModal2('superplanes_seguros.html');"  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('seguros','','imagenes/superplanes/btn_menu/btn2_seguros.jpg',1)"><img src="imagenes/superplanes/btn_menu/btn1_seguros.jpg" alt="Seguros de viaje" name="seguros" width="290" height="160" border="0" id="seguros" /></a></td>
            <td width="20">&nbsp;</td>
            <td width="290" valign="top">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  
 </table>
<div id="pie">
		<? include 'inc/pie.php';?>	
	</div>
</div>
</body>
</html>

﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<title>Apartamentos en  NUEVA YORK :: VIVE NUEVA YORK ::</title>
<!-- <script type="text/javascript" src="js/jquery.js"></script> -->
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script> -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
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
    $apartamento = $_GET["apt"];

    if ($apartamento != ""){
      // echo 'alert("' . $apartamento . '");';
      echo "openModal2('" . $apartamento . ".html');";
    }
    
  ?>
  
 });

function openModal(num){
		
		var wscr = $(window).width();
		var hscr = $(window).height();
		cargarFragmento(num + '?d=1','capa_ventana');
		$('#capa_sombra').css("width", wscr);
		$('#capa_sombra').css("height", hscr);
		$('#capa_ventana').css("display",'block');
		$('#capa_sombra').css("display",'block');
		$('#capa_ventana').show(1000);
		$('#capa_sombra').show(2000);
		
		$(window).resize();
		
		document.body.style.overflow = 'hidden';
		
	};

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

<body onload="MM_preloadImages('imagenes/btn2_facebook.jpg','imagenes/btn2_twitter.jpg','imagenes/apartamentos/btn_menu/btn2_hugo_ainara.jpg','imagenes/apartamentos/btn_menu/btn2_allan.jpg','imagenes/apartamentos/btn_menu/btn2_cassanova.jpg','imagenes/apartamentos/btn_menu/btn2_megan.jpg','imagenes/apartamentos/btn_menu/btn2_johny.jpg','imagenes/apartamentos/btn_menu/btn2_matt.jpg','imagenes/apartamentos/btn_menu/btn2_moe.jpg','imagenes/apartamentos/btn_menu/btn2_javi_blanca.jpg','imagenes/apartamentos/btn_menu/btn2_bryan.jpg','imagenes/apartamentos/btn_menu/btn2_noe.jpg','imagenes/apartamentos/btn_menu/btn2_paula.jpg','imagenes/apartamentos/btn_menu/btn2_ysabel.jpg','imagenes/apartamentos/btn_menu/btn2_eduardo.jpg','imagenes/apartamentos/btn_menu/btn2_erno.jpg','imagenes/apartamentos/btn_menu/btn2_oliver.jpg','imagenes/apartamentos/btn_menu/btn2_ruben.jpg','imagenes/apartamentos/btn_menu/btn2_tali.jpg','imagenes/apartamentos/btn_menu/btn2_ariel.jpg')" >
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
          <td width="300" valign="top"><span class= "txt_titulo_seccion"><em>Estar en el centro<br> 
          de todo y en un <br>apartamento <br>mono que no le<br> falta de nada!</em></span></td>
          <td width="40" rowspan="2">&nbsp;</td>
          <td width="300" rowspan="2" valign="top"><span class= "txt_contenido_secciones"><em>Nuestros amigos tienen apartamentos en el centro, y viven en un barrio, para que tambien puedas ir a los súper como ellos hacen. VIVA EL AHORRO!! Una imagen vale mas que mil palabras, por eso te invitamos a que veas las fotos. Lo que sí te podemos decir es algo que no se ve en las fotos, que a Los Primos nos gustan las camas nuevas y grandes y que después de patearte la ciudad lo que mola es llegar a casa y pensar, qué bien, por fin en casa! Además nuestros apartamentos incluyen internet de banda ancha, ropa de cama y toallas limpias, pero además, un secador potente de los buenos y gel de ducha, champú, papel higiénico, y</em></span></td>
          <td width="40" rowspan="2">&nbsp;</td>
          <td width="300" rowspan="2" valign="top"><span class="txt_contenido_secciones"><em>pasta de dientes, para que os podáis duchar nada más llegar del viaje</em><em>. Y lo más importante, tanto nuestra Prima María, como nuestra Tía Matilde están en un whatsapp o una llamada tuya, para poder ayudarte desde el principio.<br><br> 
          No te engañes, los Delis son caros, 5$ el cartón de leche, 6$ los cereales,... A los Primos nos gusta el ahorro, por eso buscamos apartamentos que estén situados en un barrio céntrico, para que si desayunas en Starbucks sea porque en casa no puedes prepararte un Soy Chai Latte!!</em></span></td>
        </tr>
        <tr>
          <td align="center" valign="bottom"><img src="imagenes/apartamentos/flecha.jpg" width="85" height="139" /></td>
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
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_hugo_ainara.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('hugo y ainara','','imagenes/apartamentos/btn_menu/btn2_hugo_ainara.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_hugo_ainara.jpg" alt="La casa de Hugo y Ainara" name="hugo y ainara" width="290" height="160" border="0" id="hugo y ainara" /></a> </td>
                <td width="20">&nbsp;</td>
                <td width="290"><a  href="javascript:openModal2('apartamento_allan.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('allan','','imagenes/apartamentos/btn_menu/btn2_allan.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_allan.jpg" alt="La casa de Allan" name="allan" width="290" height="160" border="0" id="allan" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290" valign="top"><a href="javascript:openModal2('apartamento_cassanova.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('cassanova','','imagenes/apartamentos/btn_menu/btn2_cassanova.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_cassanova.jpg" alt="La casa de Cassanova" name="cassanova" width="290" height="160" border="0" id="cassanova" /></a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td height="20"><table width="910" height="160" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_megan.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('megan','','imagenes/apartamentos/btn_menu/btn2_megan.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_megan.jpg" alt="La casa de Megan" name="megan" width="290" height="160" border="0" id="megan" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290"><a  href="javascript:openModal2('apartamento_johny.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('johny','','imagenes/apartamentos/btn_menu/btn2_johny.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_johny.jpg" alt="La casa de Johny" name="johny" width="290" height="160" border="0" id="johny" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_matt.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('matt','','imagenes/apartamentos/btn_menu/btn2_matt.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_matt.jpg" alt="La casa de Johny" name="matt" width="290" height="160" border="0" id="matt" /></a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td height="20"><table width="910" height="160" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_moe.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('moe','','imagenes/apartamentos/btn_menu/btn2_moe.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_moe.jpg" alt="La casa de Moe" name="moe" width="290" height="160" border="0" id="moe" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290"><a  href="javascript:openModal2('apartamento_javi_blanca.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('javi_blanca','','imagenes/apartamentos/btn_menu/btn2_javi_blanca.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_javi_blanca.jpg" alt="La casa de Javi y Blanca" name="javi_blanca" width="290" height="160" border="0" id="javi_blanca" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_bryan.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('bryan','','imagenes/apartamentos/btn_menu/btn2_bryan.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_bryan.jpg" alt="La casa de Bryan" name="bryan" width="290" height="160" border="0" id="bryan" /></a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td height="20"><table width="910" height="160" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_noe.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('noe','','imagenes/apartamentos/btn_menu/btn2_noe.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_noe.jpg" alt="La casa de Noe" name="noe" width="290" height="160" border="0" id="noe" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290"><a  href="javascript:openModal2('apartamento_paula.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('paula','','imagenes/apartamentos/btn_menu/btn2_paula.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_paula.jpg" alt="La casa de Paula" name="paula" width="290" height="160" border="0" id="paula" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_isabel.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ysabel','','imagenes/apartamentos/btn_menu/btn2_ysabel.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_ysabel.jpg" alt="La casa de Ysabel" name="ysabel" width="290" height="160" border="0" id="ysabel" /></a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td height="20"><table width="910" height="160" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_eduardo.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('eduardo','','imagenes/apartamentos/btn_menu/btn2_eduardo.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_eduardo.jpg" alt="La casa de Eduardo" name="eduardo" width="290" height="160" border="0" id="eduardo" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290"><a  href="javascript:openModal2('apartamento_erno_heejin.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('erno_heejin','','imagenes/apartamentos/btn_menu/btn2_erno.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_erno.jpg" alt="La casa de Erno Heejin" name="erno_heejin" width="290" height="160" border="0" id="erno_heejin" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_oliver.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('oliver','','imagenes/apartamentos/btn_menu/btn2_oliver.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_oliver.jpg" alt="La casa de Oliver" name="oliver" width="290" height="160" border="0" id="oliver" /></a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td height="50"><table width="910" height="160" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_ruben.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ruben21','','imagenes/apartamentos/btn_menu/btn2_ruben.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_ruben.jpg" alt="La casa de Ruben" name="ruben21" width="290" height="160" border="0" id="ruben21" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290"><a  href="javascript:openModal2('apartamento_tali.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('tali21','','imagenes/apartamentos/btn_menu/btn2_tali.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_tali.jpg" alt="La casa de Tali" name="tali21" width="290" height="160" border="0" id="tali21" /></a></td>
                <td width="20">&nbsp;</td>
                <td width="290" valign="top"><a  href="javascript:openModal2('apartamento_ariel.html');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ariel21','','imagenes/apartamentos/btn_menu/btn2_ariel.jpg',1)"><img src="imagenes/apartamentos/btn_menu/btn1_ariel.jpg" alt="La casa de Ariel" name="ariel21" width="290" height="160" border="0" id="ariel21" /></a></td>
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

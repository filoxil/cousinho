<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.a_1 {width:981px;height:63px;overflow:hidden;background-image:url(img/boton_1.jpg);margin:auto; top:0; bottom:0; left:0; right:0;}		
.b_1 {width:0;height:63px;overflow:hidden;margin-left:-50px;transform:skew(-20deg);transition:width 1s ease;}		
.a_1:hover .b_1 {width:1095px;}
.c_1 {width:1095px;height:63px;transform:skew(20deg);margin-left:-64px;background-image:url(img/boton_1b.jpg);background-position:114px 0;}

.a_2 {width:981px;height:68px;overflow:hidden;background-image:url(img/boton_2.jpg);margin:auto; top:0; bottom:0; left:0; right:0;}		
.b_2 {width:0;height:68px;overflow:hidden;margin-left:-50px;transform:skew(-20deg);transition:width 1s ease;}		
.a_2:hover .b_2 {width:1095px;}
.c_2 {width:1095px;height:68px;transform:skew(20deg);margin-left:-64px;background-image:url(img/boton_2b.jpg);background-position:114px 0;}

.a_3 {width:981px;height:65px;overflow:hidden;background-image:url(img/boton_3_1.jpg);margin:auto; top:0; bottom:0; left:0; right:0;}		
.b_3 {width:0;height:65px;overflow:hidden;margin-left:-50px;transform:skew(-20deg);transition:width 1s ease;}		
.a_3:hover .b_3 {width:1095px;}
.c_3 {width:1095px;height:65px;transform:skew(20deg);margin-left:-64px;background-image:url(img/boton_3_1.jpg);background-position:114px 0;}

.a_4 {width:981px;height:58px;overflow:hidden;background-image:url(img/boton_4_1.jpg);margin:auto; top:0; bottom:0; left:0; right:0;}		
.b_4 {width:0;height:58px;overflow:hidden;margin-left:-50px;transform:skew(-20deg);transition:width 1s ease;}		
.a_4:hover .b_4 {width:1095px;}
.c_4 {width:1095px;height:58px;transform:skew(20deg);margin-left:-64px;background-image:url(img/boton_4_2.jpg);background-position:114px 0;}

.a_5 {width:981px;height:69px;overflow:hidden;background-image:url(img/boton_6_1.jpg);margin:auto; top:0; bottom:0; left:0; right:0;}		
.b_5 {width:0;height:69px;overflow:hidden;margin-left:-50px;transform:skew(-20deg);transition:width 1s ease;}		
.a_5:hover .b_5 {width:1095px;}
.c_5 {width:1095px;height:69px;transform:skew(20deg);margin-left:-64px;background-image:url(img/boton_6_2.jpg);background-position:114px 0;}

a {font-family: Arial, Helvetica, sans-serif;color: #333333;}
a:visited {color: #333333;text-decoration: none;}
a:hover {color: #999999;text-decoration: underline;}
a:link {text-decoration: none;}
a:active {text-decoration: none;}
.capa_sombra{position:fixed;left:0;top:0;background-color:#000;opacity:0.6;filter:alpha(opacity=60);z-index:1000;display:none; text-align:center;}
.capa_ventana{position:fixed; font-family:arial;font-size:1em; top:10px; height:95%;border:0.05em solid black;overflow:auto;background-color:#fff;z-index:1001;display:none;}
.capa_ventana_2{position:fixed; font-family:arial;font-size:1em; border:0.05em solid #ccc;overflow:none; background-color:#fff;opacity:0.9;filter:alpha(opacity=90);z-index:1001;display:none;}
.texto_mensaje{
font-family: "Georgia", Times New Roman, Times, serif;
	font-size: 20px;
	color: #111;
	line-height: 30px;
	font-weight:bold;
	font-style: oblique;
	}

</style>
<title>ALQUILER APARTAMENTOS VACACIONES NUEVA YORK :: VIVE NUEVA YORK :: </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/estilo.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/smartpreload.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style_porfolio.css">

<script type="text/javascript" src="js/jquery-hover-effect.js"></script>

	
<script>

function carga_menu(num,velocidad){

	if (velocidad < 10){ velocidad =1000}
	if (document.getElementById('menu_'+num+'_1').style.display=='none'){
		$('#menu_1_1').slideUp(velocidad);
		$('#menu_2_1').slideUp(velocidad);
		$('#menu_5_1').slideUp(velocidad);
		
		
		$('#menu_'+num+'_1').slideDown(velocidad, function(){ $('html, body').stop().animate({scrollTop: $('#menu_'+num).offset().top }, velocidad); });
	}else{
		$('#menu_'+num+'_1').slideUp(velocidad);
	}
}


$(document).ready(function(){
	$('#menu_1_1').load('inc/apartamentos_home.php');	
	$('#menu_2_1').load('inc/superplanes_home.php');
	$('#menu_5_1').load('losprimos_home.php');


    $(document).smartpreload({ images: ['img/boton_1b.jpg', 'img/boton_2b.jpg', 'img/boton_6_1.jpg', 'img/boton_4_1.jpg',], oneachimageload: function() {}, onloadall: function() {} });

	$("#menu_apartamento").mouseover(function() {var pos = $(this).position();$("#bocadillo_1").css({position: "absolute",top: pos.top + "px",left: (pos.left ) + "px"}).delay(200).fadeIn();});
	$("#menu_apartamento").mouseout(function() {$("#bocadillo_1").delay(200).fadeOut();});
	
	$("#menu_superplanes").mouseover(function() {var pos2 = $(this).position();$("#bocadillo_2").css({position: "absolute",top: pos2.top + "px",left: (pos2.left ) + "px"}).delay(200).fadeIn();});
	$("#menu_superplanes").mouseout(function() {$("#bocadillo_2").delay(200).fadeOut();});

	$("#menu_tienda").mouseover(function() {var pos3 = $(this).position();$("#bocadillo_3").css({position: "absolute",top: pos3.top + "px",left: (pos3.left ) + "px"}).delay(200).fadeIn();});
	$("#menu_tienda").mouseout(function() {$("#bocadillo_3").delay(200).fadeOut();});
	
	$("#menu_tienda").mouseover(function() {var pos6 = $(this).position();$("#t2").css({position: "absolute",top: pos6.top + "px",left: (pos6.left ) + "px"}).delay(200).fadeIn();});
	$("#menu_tienda").mouseout(function() {$("#t2").delay(200).fadeOut();});

	$("#menu_blog").mouseover(function() {var pos4 = $(this).position();$("#bocadillo_4").css({position: "absolute",top: pos4.top + "px",left: (pos4.left ) + "px"}).delay(200).fadeIn();});
	$("#menu_blog").mouseout(function() {$("#bocadillo_4").delay(200).fadeOut();});
	
	$("#menu_primos").mouseover(function() {var pos5 = $(this).position();$("#bocadillo_5").css({position: "absolute",top: pos5.top + "px",left: (pos5.left ) + "px"}).delay(200).fadeIn();});
	$("#menu_primos").mouseout(function() {$("#bocadillo_5").delay(200).fadeOut();});

	


	
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
	
	$(window).resize();
	
 });

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

function openModal_mensaje(num){

		var ancho = 800; 
		var alto =300;
		var wscr = $(window).width();
		var hscr = $(window).height();
		$('#capa_ventana_2').css("width", ancho+'px');
		$('#capa_ventana_2').css("height", alto +'px');
		var wcnt = $('#capa_ventana_2').width();
		var hcnt = $('#capa_ventana_2').height();

		var mleft = ( wscr - wcnt ) / 2;
		var mtop = ( hscr - hcnt ) / 2;

		$('#capa_ventana_2').css("left", mleft+'px');
		$('#capa_ventana_2').css("top", mtop - 100 +'px');

		$('#capa_ventana_2').css("display",'block');

		$('#capa_ventana_2').show(1000);
	
		document.body.style.overflow = 'hidden';
};
	
function closeModal_mensaje(){
	$('#capa_ventana_2').css("display",'none');
	document.body.style.overflow = 'auto';
}

function closeModal(){
	$('#capa_ventana').css("display",'none');
	$('#capa_sombra').css("display",'none');
	document.body.style.overflow = 'auto';
	$('#capa_ventana').load('blanco.html');
}


function mostrar(num){
	var obj=document.getElementById(num);
	obj.style.display='block';
}
function ocultar(num){
	var obj=document.getElementById(num);
	obj.style.display='none';
}
</script>

		<script src="js/modernizr.custom.js"></script>

<?php include_once("inc/cod_analytics.php") ?>
</head>

<body >

<div id="capa_sombra" class="capa_sombra" onclick="closeModal();"></div>
<div id="capa_ventana" class="capa_ventana">
	<table width="100%">
    	<tr>
            <td width="20" align="right"><a href="javascript:closeModal();" ><img src="img/x.png" border="0" /></a></td>
		</tr>
	</table>
	<table width="200" height="200"><tr><td valign="middle" align="center"><img src="img/ajax_load.gif" /></td></tr></table>
</div>
<div id="capa_ventana_2" class="capa_ventana_2">
<center>
	<table width="800">
    	<tr><td width="20" align="right"><a href="javascript:closeModal_mensaje()" ><img src="img/x.png"  border="0" /></a></td></tr>
		<tr><td class="texto_mensaje" valign="middle" align="center" height="260" >Hola, estamos actualizando esta sección.<br />¡Enseguida volvemos!</td></tr>
	</table>
</center>
</div>
<div id="cuerpo">

	<div id="cabecera">
		<? include 'inc/cabecera_portada.php';?>
	</div>

		<a href="javascript:carga_menu(1,1000)"  ><div class="a_1" id="menu_1">
			<div class="b_1">
				<div class="c_1" ><img src="img/null.gif" width="1093" height="61" border="0" style=" z-index:10;" id="menu_apartamento" /></div>
			</div>
		</div></a>
		<div id="bocadillo_1" style="display:none; margin: 35px 0 0 700px;">
			<a href="javascript:carga_menu(1,1000)"  ><img src="img/anuncio_1.png"  border="0" /></a>
		</div>
		<div id="menu_1_1" style="display:none;" ></div>	

		
		<a href="javascript:carga_menu(2,1000)" ><div class="a_2" id="menu_2">
			<div class="b_2">
				<div class="c_2"><img src="img/null.gif" width="1093" height="66"  border="0" style=" z-index:10;" id="menu_superplanes" /></div>
			</div>
		</div></a>
		<div id="bocadillo_2" style="display:none; margin: -80px 0 0 700px;">
			<a href="javascript:carga_menu(2,1000)" ><img src="img/anuncio_2.png" width="144" height="98"  border="0" /></a>
		</div>
		<div id="menu_2_1" style="display:none;" ></div>
		
		
		<a href="javascript:openModal_mensaje();" ><div class="a_3" id="menu_3">
			<div class="b_3">
				<div class="c_3"><img src="img/null.gif" width="1093" height="65" border="0" style=" z-index:10;" id="menu_tienda"  /></div>
			</div>
		</div></a>
		<a href="javascript:openModal_mensaje();" ><div id="t2" style="display:none; margin:-20px 0 0 650px;"><img src="img/boton_tienda.png" width="404" height="100"  border="0" style=" z-index:1;"  /></div></a>
		<a href="javascript:openModal_mensaje();" ><div id="bocadillo_3" style="display:none; margin: -20px 0 0 530px;"><img src="img/anuncio_3.png"  border="0"  /></div></a>

		<a href="javascript:openModal_mensaje();" ><div class="a_4" id="menu_4">
			<div class="b_4">
				<div class="c_4" ><img src="img/null.gif" width="1093" height="58" border="0" style=" z-index:10;" id="menu_blog" /></div>
			</div>
		</div></a>
		<a href="javascript:openModal_mensaje();" ><div id="bocadillo_4" style="display:none; margin: -20px 0 0 700px; "><img src="img/anuncio_4.png"  border="0" /></div></a>
	
		<a href="javascript:carga_menu(5,1000)" ><div class="a_5" id="menu_5">
			<div class="b_5">
				<div class="c_5" ><img src="img/null.gif" width="1093" height="69" border="0" style=" z-index:10;" id="menu_primos" /></div>
			</div>
		</div></a>
		<a href="javascript:carga_menu(5,1000)" ><div id="bocadillo_5" style="display:none;margin: -90px 0 0 650px;"><img src="img/anuncio_5.png"  border="0" /></div>
		<div id="menu_5_1" style="display:none;" ></div>	</a>
	  
	<div id="pie">
		<? include 'inc/pie_home.php';?>
	</div>           
</div>
</body>
</html>
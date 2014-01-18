<?php

$f0 = $_POST["f0"];
$f1 = $_POST["f1"];
$f2 = $_POST["f2"];
$f3 = $_POST["f3"];
$f4 = $_POST["f4"];
$f5 = $_POST["f5"];
$f6 = $_POST["f6"];
$f7 = $_POST["f7"];
$f8 = $_POST["f8"];
$f9 = $_POST["f9"];
$f10 = $_POST["f10"];
$f11 = $_POST["f11"];
$f12 = $_POST["f12"];
$f13 = $_POST["f13"];
$f14 = $_POST["f14"];
$f15 = $_POST["f15"];
$f16 = $_POST["f16"];
$f17 = $_POST["f17"];


if ($f0 ==1){



$para      = 'alberto@lacasademisprimos.com';
$titulo = 'MAIL DESDE LA WEB - RESERVAS';

$mensaje = "<p><h3>FORMULARIO DE RESERVA</h3></p>";
$mensaje .= "<p>";
$mensaje = $mensaje ."Nombre :  " .  $f1 . "<br>";
$mensaje = $mensaje ."Apellido :  " .  $f2 . "<br>";
$mensaje = $mensaje ."Dirección :  " .  $f3 . "<br>";
$mensaje = $mensaje ."Ciudad :  " .  $f4 . "<br>";
$mensaje = $mensaje ."Codigo Postal :  " .  $f5 . "<br>";
$mensaje = $mensaje ."Pais :  " .  $f6 . "<br>";
$mensaje = $mensaje ."mail :  " .  $f7 . "<br>";
$mensaje = $mensaje ."Telefono :  " .  $f8 . "<br>";
$mensaje = $mensaje ." ------ <br>";
$mensaje = $mensaje ."Apartamento :  " .  $f10 . "<br>";

$mensaje = $mensaje ."Desde :  " .  $f13 . "<br>";
$mensaje = $mensaje ."Hasta :  " .  $f16 . "<br>";
$mensaje = $mensaje ."Numero Personas :  " .  $f17  . "<br>";
$mensaje = $mensaje ."Comentarios :  " .  $f9  . "<br>";
$mensaje .= "</p>";


$cabeceras = 'From: info@lacasademisprimos.com' . "\r\n" .
    'Reply-To: info@lacasademisprimos.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

//dirección del remitente
$headers .= "From: INFO <info@lacasademisprimos.com>\r\n";


//dirección de respuesta, si queremos que sea distinta que la del remitente
$headers .= "Reply-To: INFO <info@lacasademisprimos.com>\r\n";

//$headers .= "BCC: Alvaro <alvaro.arribas@gmail.com>\r\n";
//ruta del mensaje desde origen a destino
$headers .= "Return-path: INFO <info@lacasademisprimos.com>\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $headers);

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<title>Super Planes en  NUEVA YORK :: VIVE NUEVA YORK :: </title>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
  $(document).ready(function(){
    $(".datepicker").datepicker({            
       dateFormat: "d/m/yy", // formato de la fecha      //minDate: "+0D", // mínimo tiempo a mostrar      
       maxDate: "+1Y", // máximo tiempo a mostrar
       minDate: "+0D",      
       changeMonth: true, // indica si se muestra o no el SELECT de meses      // iniciales para los días de la semana      
       dayNamesMin: ["Do","Lu","Ma","Mi","Ju","Vi","Sa"],      // nombre completo de los meses      
       monthNames: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],      // nombre para cargar el SELECT de búsqueda por mes      
       monthNamesShort: ["Enero","Febrero","Marzo","Abril","Mayo","Junio", "Julio", "Agosto","Sep","Octubre","Nov","Dic"]      
       // alert ($('#desde').val());
     });

  });

  function vacio(q) {  
    for ( i = 0; i < q.length; i++ ) {  
            if ( q.charAt(i) != " " ) {  
                    return true  
            }  
    }
    
    return false  
  }
  function validarEmail( email ) {
      expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if ( !expr.test(email) ){
        return false
      }
      return true
  }
  function valida(form){
    
    //Apartamento o servicio
    campo=form.elements["f10"].value;
    if (campo =="" || vacio(campo)==false){
      alert('Por favor, rellena el campo Apartamento o Servicio');
      return false
    }

    //Fecha desde
    campo=form.elements["f13"].value;
    if (campo =="" || vacio(campo)==false){
      alert('Por favor, rellena el campo Fecha Desde');
      return false
    }

    //Fecha hasta
    campo=form.elements["f16"].value;
    if (campo =="" || vacio(campo)==false){
      alert('Por favor, rellena el campo Fecha Hasta');
      return false
    }

    //Número de personas
    campo=form.elements["f17"].value;
    if (campo =="" || vacio(campo)==false){
      alert('Por favor, rellena el campo Número de personas');
      return false
    }

    //Nombre
    campo=form.elements["f1"].value;
    if (campo =="" || vacio(campo)==false){
      alert('Por favor, rellena el campo Nombre');
      return false
    }

    //Apellidos
    campo=form.elements["f2"].value;
    if (campo =="" || vacio(campo)==false){
      alert('Por favor, rellena el campo Apellidos');
      return false
    }

    //Email
    campo=form.elements["f7"].value;
    if (campo =="" || vacio(campo)==false){
      alert('Por favor, rellena el campo Email, con un correo electrónico válido');
      return false
    }

    //Teléfono
    campo=form.elements["f8"].value;
    if (campo =="" || vacio(campo)==false){
      alert('Por favor, rellena el campo Teléfono');
      return false
    }

    //Comentarios
    campo=form.elements["f9"].value;
    if (campo =="" || vacio(campo)==false){
      alert('Por favor, rellena el campo Comentarios');
      return false
    }

    return true

  }
</script>





</head>

<body onload="MM_preloadImages('imagenes/btn2_facebook.jpg','imagenes/btn2_twitter.jpg')" >
<div id="cuerpo">
	<div id="cabecera">
		<? include 'inc/cabecera.php';?>
	</div>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="50" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" colspan="2"><span class= "txt_titulo_seccion"><em>Proceso de reserva<br> y pago</em></span></td>
  </tr>
  <tr>
    <td height="40" colspan="2"></td>
  </tr>
  <tr>
    <td colspan="2"><table width="980" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="300" rowspan="4" valign="top"><table width="300" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="60" height="60" valign="top"><img src="imagenes/1.jpg" width="60" height="60" /></td>
            <td width="10" valign="top">&nbsp;</td>
            <td width="230" valign="top"><span class="txt_titulo_seccion_contigo2"><em>Solicitas tu<br> 
              pedido</em></span></td>
          </tr>
          <tr>
            <td height="20" colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" colspan="3" align="left" valign="top"><span class= "txt_contenido_secciones"><em>Ahora que vamos a ser familia necesitamos conocerte mejor! Ten encuenta que rellenar este formulario no te compromete a hacer ningún pago. Lo que te asegura es saber si tu apartamento está disponible en las fechas que quieres y sobretodo, que nadie te lo quite!
            </em></span></td>
          </tr>
          <tr>
            <td height="20"  colspan="3" align="center" valign="top"></td>
          </tr>
          <tr>
            <td  colspan="3" align="center" valign="top"><img src="imagenes/apartamentos/flecha.jpg" width="85" height="139" /></td>
          </tr>
        </table></td>
        <td width="40" rowspan="4">&nbsp;</td>
        <td width="300"></td>
        <td width="40" rowspan="4">&nbsp;</td>
        <td width="300" rowspan="4" valign="top"><table width="300" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="60" height="60" valign="top"><img src="imagenes/3.jpg" width="60" height="60" /></td>
            <td width="10" valign="top">&nbsp;</td>
            <td width="230" valign="top"><span class="txt_titulo_seccion_contigo2"><em>Aceptas y pagas<br> con total confianza</em></span></td>
          </tr>
          <tr>
            <td height="20" colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="60" colspan="3" align="left" valign="top"><span class= "txt_contenido_secciones"><em>Si la oferta es correcta podrás realizar el pago desde el mismo enlace mediante transferencia bancaria, PayPal, tarjeta de crédito/débito, etc. Te asesoraremos en todo el proceso si lo necesitas. Ahora viene lo mejor, ya os váis de viaje!</em></span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="300" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="60" height="60" valign="top"><img src="imagenes/2.jpg" width="60" height="60" /></td>
            <td width="10" valign="top">&nbsp;</td>
            <td width="230" valign="top"><span class="txt_titulo_seccion_contigo2"><em>Formalizamos<br> el pedido</em></span></td>
          </tr>
          <tr>
            <td height="20" colspan="3">&nbsp;</td>
            </tr>
          <tr>
            <td height="60" colspan="3" align="left" valign="top"><span class= "txt_contenido_secciones"><em>Una vez que hayamos recibido el formulario con tus peticiones, el Primo Alberto te informará por email rápidamente de la disponibilidad del apartamento y te dará todos los detalles que necesites del mismo. Una vez que te decidas, te hará llegar un enlace con la oferta formal de tu pedido para que puedas revisarlo todo desde la web. Ya casi lo tienes!</em></span></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" colspan="2" align="center"><table width="960" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
		
		<?
		 if ($f0!=1){
		?>
		
		
		<form id="form1" name="form1" method="post" action="reservas.php" onsubmit="return valida(this)">
		<input type="hidden" name="f0" value="1" />
          <table width="591" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><span class="txt_formulario">Apartamento o servicio</span><span class="txt_asterisco_formulario2">*</span></td>
              <td>&nbsp;</td>
              <td height="30" background="imagenes/fnd_caja_txt_form.png"><input type="text" name="f10" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            
            <tr>
              <td height="10" colspan="3" align="left"></td>
            </tr>
            <tr>
              <td height="10" colspan="3" align="left"><span class="txt_formulario">Fechas </span><span class="txt_asterisco_formulario2">*</span></td>
              </tr>
            
            <tr>
              <td><span class="txt_contenido_secciones"><em>Desde</em></span></td>
              <td>&nbsp;</td>
              <td height="30"><table width="85" height="30" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <!-- <td width="65" background="imagenes/fnd_caja_fechas_form.png"><input type="text" name="f11" value="" style="border:0px solid #000; width:40px; margin:0 0 0 3px" /></td>
                  <td width="65" background="imagenes/fnd_caja_fechas_form.png"><input type="text" name="f12" value="" style="border:0px solid #000; width:40px; margin:0 0 0 3px" /></td> -->
                  <td width="85" background="imagenes/fnd2_caja_fechas_form.png"><input type="text" name="f13" class="datepicker" value="" style="border:0px solid #000; width:70px; margin:0 0 0 3px" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="10" colspan="3"></td>
              </tr>
            <tr>
              <td><span class="txt_contenido_secciones"><em>Hasta</em></span></td>
              <td>&nbsp;</td>
              <td height="30"><table width="85" height="30" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <!-- <td width="65" background="imagenes/fnd_caja_fechas_form.png"><input type="text" name="f14" value="" style="border:0px solid #000; width:40px; margin:0 0 0 3px" /></td>
                  <td width="65" background="imagenes/fnd_caja_fechas_form.png"><input type="text" name="f15" value="" style="border:0px solid #000; width:40px; margin:0 0 0 3px" /></td> -->
                  <td width="85" background="imagenes/fnd2_caja_fechas_form.png"><input type="text" name="f16" class="datepicker" value="" style="border:0px solid #000; width:70px; margin:0 0 0 3px" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="20" colspan="3"></td>
              </tr>
            <tr>
              <td><span class="txt_formulario">Número de personas </span><span class="txt_asterisco_formulario2">*</span></td>
              <td>&nbsp;</td>
              <td height="30"><table width="53" height="30" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td background="imagenes/fnd_caja_personas_form.png"><input type="text" name="f17" value="" style="border:0px solid #000; width:40px; margin:0 0 0 3px" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="30" colspan="3"></td>
            </tr>
            <tr>
              <td height="3" colspan="3" background="imagenes/fnd_filete.jpg"></td>
            </tr>
            <tr>
              <td height="30" colspan="3"></td>
              </tr>
            <tr>
              <td width="150"><span class="txt_formulario">Nombre </span><span class="txt_asterisco_formulario2">*</span></td>
              <td width="10">&nbsp;</td>
              <td width="440" height="30" background="imagenes/fnd_caja_txt_form.png"><input type="text" name="f1" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario"> Apellidos </span><span class="txt_asterisco_formulario2">*</span></td>
              <td>&nbsp;</td>
              <td height="30" background="imagenes/fnd_caja_txt_form.png"><input type="text" name="f2" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Dirección</span></td>
              <td>&nbsp;</td>
              <td height="30" background="imagenes/fnd_caja_txt_form.png"><input type="text" name="f3" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Ciudad</span></td>
              <td>&nbsp;</td>
              <td height="30" background="imagenes/fnd_caja_txt_form.png"><input type="text" name="f4" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Código Postal</span></td>
              <td>&nbsp;</td>
              <td height="30" background="imagenes/fnd_caja_txt_form.png"><input type="text" name="f5" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Pais</span></td>
              <td>&nbsp;</td>
              <td height="30" background="imagenes/fnd_caja_txt_form.png"><input type="text" name="f6" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Dirección de Email</span><span class="txt_asterisco_formulario2"> *</span></td>
              <td>&nbsp;</td>
              <td height="30" background="imagenes/fnd_caja_txt_form.png"><input type="text" name="f7" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Teléfono </span><span class="txt_asterisco_formulario2">*</span></td>
              <td>&nbsp;</td>
              <td height="30" background="imagenes/fnd_caja_txt_form.png"><input type="text" name="f8" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td valign="top"><span class="txt_formulario">Comentarios </span><span class="txt_asterisco_formulario2">*</span></td>
              <td>&nbsp;</td>
              <td height="180" background="imagenes/fnd2_caja_txt_form.png"><textarea name="f9" rows="10" style="border:0px solid #000; width:420px; margin:5px 0 15px 5px" id="f9"></textarea></td>
            </tr>
            <tr>
              <td height="20" colspan="3"><span class="txt_asterisco_formulario2">*</span><span class="txt_asterisco_formulario"> Campos Obligatorios</span></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td height="30" colspan="3"></td>
            </tr>
            <tr>
              <td height="30" colspan="3" align="right" valign="middle"><input type="image" src="imagenes/btn_enviar_solicitud.jpg" /></td>
            </tr>
          </table>
        </form>
		
		
		<?
		}else {
			
			echo "GRACIAS POR CONTACTAR. EN BREVE NOS PONDREMOS EN CONTACTO CON USTED.";
			}
		
		?>
		
		</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  
  
  
 </table>
	<div id="pie">
		<? include 'inc/pie.php';?>	
  </div>
</div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<title>Super Planes en  NUEVA YORK :: VIVE NUEVA YORK :: </title>
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body onload="MM_preloadImages('imagenes/btn2_facebook.jpg','imagenes/btn2_twitter.jpg')" >
<div id="cuerpo">
	<div id="cabecera">
		<? include 'inc/cabecera.php';?>
	</div>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">

 
 
 <tr>
    <td height="40">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="980" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="310" align="center" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><span class= "txt_titulo_seccion"><em>¿Quieres ser un Primo?</em></span></td>
            </tr>
        </table></td>
        <td width="25">&nbsp;</td>
        <td width="310" align="center" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><span class= "txt_contenido_secciones_pie"><em>Si quieres compartir nuetro sueño y trabajar en una empresa intrépida, diferente, trendy, divertida y acogedora mándanos tus datos y tu C.V y te diremos si buscamos alguien de tu perfil. Estamos buscando gente entusiasta, flexible y con talento que nos ayude a mejorar.</em></span></td>
            </tr>
        </table></td>
        <td width="25">&nbsp;</td>
        <td width="310" align="center" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><span class= "txt_contenido_secciones_pie"><em>Gracias por contar con La Casa de Mis Primos para tu carrera profesional. Por favor, tómate un minuto para rellenar el siguiente formulario. Una vez que hayas completado tu solicitud, te enviaremos un correo electrónico con información. </em></span></td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="980" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="left" valign="top"><span class= "txt_formulario">GRACIAS POR ENVIARNOS TUS DATOS.</span></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="310" align="center" valign="top">&nbsp;</td>
        <td width="25">&nbsp;</td>
        <td height="395" align="left" valign="top">
        
        <?
		 if ($f0!=1){
		?>
		
		
		<form id="form1" name="form1" method="post" action="../reservas.php">
		<input type="hidden" name="f0" value="1" />
          <table width="591" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="150"><span class="txt_formulario">Nombre </span><span class="txt_asterisco_formulario2">*</span></td>
              <td width="10">&nbsp;</td>
              <td width="440" height="30" background="../imagenes/fnd_caja_txt_form.png"><input type="text" name="f1" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Primer Apellido </span><span class="txt_asterisco_formulario2">*</span></td>
              <td>&nbsp;</td>
              <td height="30" background="../imagenes/fnd_caja_txt_form.png"><input type="text" name="f2" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Dirección</span></td>
              <td>&nbsp;</td>
              <td height="30" background="../imagenes/fnd_caja_txt_form.png"><input type="text" name="f3" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Ciudad</span></td>
              <td>&nbsp;</td>
              <td height="30" background="../imagenes/fnd_caja_txt_form.png"><input type="text" name="f4" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Código Postal</span></td>
              <td>&nbsp;</td>
              <td height="30" background="../imagenes/fnd_caja_txt_form.png"><input type="text" name="f5" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Pais</span></td>
              <td>&nbsp;</td>
              <td height="30" background="../imagenes/fnd_caja_txt_form.png"><input type="text" name="f6" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Dirección de Email</span><span class="txt_asterisco_formulario2"> *</span></td>
              <td>&nbsp;</td>
              <td height="30" background="../imagenes/fnd_caja_txt_form.png"><input type="text" name="f7" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td><span class="txt_formulario">Teléfono </span><span class="txt_asterisco_formulario2">*</span></td>
              <td>&nbsp;</td>
              <td height="30" background="../imagenes/fnd_caja_txt_form.png"><input type="text" name="f8" value="" style="border:0px solid #000; width:420px; margin:0 0 0 5px" /></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td valign="top"><span class="txt_formulario">Comentarios </span><span class="txt_asterisco_formulario2">*</span></td>
              <td>&nbsp;</td>
              <td height="180" background="../imagenes/fnd2_caja_txt_form.png"><textarea name="f9" rows="10" style="border:0px solid #000; width:420px; margin:5px 0 15px 5px" id="f9"></textarea></td>
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
              <td height="30" colspan="3" align="right" valign="middle"><input type="image" src="../imagenes/btn_enviar_solicitud.jpg" /></td>
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
  
  
  
  
 </table>
	<div id="pie">
		<? include 'inc/pie.php';?>	
	</div>
</div>
</body>
</html>

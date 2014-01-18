<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<title>NUEVA YORK :: VIVE NUEVA YORK :: </title>
<script type="text/javascript" src="js/jquery.js"></script>





</head>

<body onload="MM_preloadImages('imagenes/btn2_facebook.jpg','imagenes/btn2_twitter.jpg')" >
<div id="cuerpo">
	<div id="cabecera">
		<? include 'inc/cabecera_simple.php';?>
	</div>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:0 30px 0 30px">

  <tr>
    <td height="40"><span class= "txt_titulo_seccion"><em>Mi viaje</em></span></td>
  </tr>
  <tr>
    <td height="40" align="justify" style=" font-size:14px;"><br /><span class="txt_contenido_secciones"><em>
Por favor, rellena los datos del formulario para que Los Primos podamos organizar lo mejor posible vuestra llegada y estancia en Nueva York. Recuerda que esto es imprescindible para que podamos formalizar vuestra reserva. ¡Muchas gracias! 
<br /></em></span> 
	</td>
  </tr>
 <tr>
 	<td>
 <img src="img/f1.jpg" width="834" height="110" />
 <br />
 </td></tr>

  
  <tr>
    <td height="40" align="left"><table  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
		
		<?
		 if ($f0!=1){
		?>
		
		
		<form id="form1" name="form1" method="post" action="reservas.php">
		<input type="hidden" name="f0" value="1" />
          <table width="591" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><span class="txt_formulario">A. Código Primo: </span><span class="txt_asterisco_formulario2">*</span></td>
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
              <td height="30"><table width="215" height="30" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="65" background="imagenes/fnd_caja_fechas_form.png"><input type="text" name="f11" value="" style="border:0px solid #000; width:40px; margin:0 0 0 3px" /></td>
                  <td width="65" background="imagenes/fnd_caja_fechas_form.png"><input type="text" name="f12" value="" style="border:0px solid #000; width:40px; margin:0 0 0 3px" /></td>
                  <td width="85" background="imagenes/fnd2_caja_fechas_form.png"><input type="text" name="f13" value="" style="border:0px solid #000; width:70px; margin:0 0 0 3px" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="10" colspan="3"></td>
              </tr>
            <tr>
              <td><span class="txt_contenido_secciones"><em>Hasta</em></span></td>
              <td>&nbsp;</td>
              <td height="30"><table width="215" height="30" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="65" background="imagenes/fnd_caja_fechas_form.png"><input type="text" name="f14" value="" style="border:0px solid #000; width:40px; margin:0 0 0 3px" /></td>
                  <td width="65" background="imagenes/fnd_caja_fechas_form.png"><input type="text" name="f15" value="" style="border:0px solid #000; width:40px; margin:0 0 0 3px" /></td>
                  <td width="85" background="imagenes/fnd2_caja_fechas_form.png"><input type="text" name="f16" value="" style="border:0px solid #000; width:70px; margin:0 0 0 3px" /></td>
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
              <td><span class="txt_formulario">Primer Apellido </span><span class="txt_asterisco_formulario2">*</span></td>
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
    <td>&nbsp;</td>
  </tr>
  
  
  
 </table>
	<div id="pie">
		<? include 'inc/pie.php';?>	
	</div>
</div>
</body>
</html>

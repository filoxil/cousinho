		  <table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
		    <td height="40" colspan="2"></td>
  </tr>
		  <tr><td colspan="2"><img src="img/sky_line.jpg" width="981" height="102" /></td></tr>
		  
	    <tr><td colspan="2" align="center"><table width="900" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:20px 0 20px 0">
          <tbody>
            <tr>
              <td height="20"><div align="center"><span class="txt_entrada"><em>Bienvenidos a La Casa de mis Primos. Desde aquí podemos conseguiros el apartamento que necesitáis en NY, <br>os organizamos superplanes allí para que lo paséis en grande, tenemos una tienda online pequeña pero molona<br> y en nuestro blog os contamos historias interesantes de otros Primos viajeros como vosotros. <strong>Disfrutad, estáis en vuestra casa.</strong>.</em></span></div></td>
            </tr>
          </tbody>
	      </table></td></tr>
		  <tr>
              <td height="3" colspan="2" background="imagenes/fnd_filete.jpg"></td>
          </tr>
            <tr>
              <td  colspan="2"><table width="980" border="0" cellspacing="0" cellpadding="0" style="height:140px;">
			  <tr><td colspan="3" style="height:10px;"></td></tr>
                  <tr>
				  <td width="140" valign="top" style="padding: 8px;">
                  <a href="http://www.lacasademisprimos.com" class="link_rosa" >Home</a><br>
                  <a href="rent_your.php" class="link_rosa">Rent your apt.</a><br>
                  <a href="equipo.php" class="link_rosa">Quienes somos</a><br>    
                      <span class="txt_pie">Prensa</span><br>
                      
                    <a href="privacidad.php" class="link_rosa">Privacidad</a><br>                    </td>
                    
				  	<td width="115" valign="top" style="padding: 8px;">
                    
            <a href="empleo.php" class="link_rosa" >Empleos</a><br />
            <a href="preguntas_frecuentes.php" class="link_rosa">FAQ</a><br>
			<a href="condiciones_contratacion.php" class="link_rosa">Condiciones<br /> generales de<br /> 
			contratación</a>            </td>
					<td align="right" valign="top" style="padding: 0px;">
					<div style="float:left;padding: 7px; " >
						<a href="https://www.facebook.com/pages/La-casa-de-mis-primos-en-Nueva-York/117408098327646" target="_blank"><img src="img/pie_3_1.png" border="0" onmouseover="this.src='img/pie_3_2.jpg'" onmouseout="this.src='img/pie_3_1.png'" /></a>
					</div>
					<div style="float:left;padding: 7px; ">
						<a href="http://www.lacasademisprimos.com/reservas.php"><img src="img/pie_2_1.png" border="0" onmouseover="this.src='img/pie_2_2.jpg'" onmouseout="this.src='img/pie_2_1.png'" /></a>
					</div>
					<div style="float:left;padding: 7px; ">
						<a href="javascript:muestra_ventana();"  ><img src="img/pie_1_1.png" width="210" height="88" border="0" onmouseover="this.src='img/pie_1_2.jpg'" onmouseout="this.src='img/pie_1_1.png'"  /></a>
						<div id="ayuda" style="display:none; width:220px; margin:-348px 0 0 -180px; position:relative; z-index:10; background-color:#FFFFFF;">

<script>
function muestra_ventana(){
$( '#ayuda').toggle( 'slow' );
}
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
function envia_mail(){
	
	var nombre = $("#1_nombre").val().replace(/\s/g,'%20');
	var email = $("#1_email").val();
	var consulta = $("#1_consulta").val().replace(/\s/g,'%20');
	if (nombre =="" || vacio(nombre)==false){
	  alert('Por favor, rellena el campo Nombre');
	}else if (email =="" || vacio(email)==false || validarEmail(email)== false){
	  alert('Por favor, rellena el campo Email con un correo electrónico válido');
	}else if (consulta =="" || vacio(consulta)==false){
	  alert('Por favor, rellena el campo Consulta');
	}else{
		$('#ayuda').load('blanco.html');
		$('#ayuda').load('envio_mail.php?a=ConsultaGeneral&n='+nombre+'&e='+email+'&c='+consulta);
	}
}

</script>
							<form >
							<table width="210" border="0" bgcolor="#FFFFFF">
							<tr><td align="right"><a href="javascript:muestra_ventana()" style=" text-decoration:none; color:#000000;"><img src="/img/x.png"   border="0" /></a></td></tr>
							  <tr>
								<td style="padding: 8px;">
								<span class= "desplegable_home_1"><strong>Llámale</strong></span><br>
								<span class= "desplegable_home_2">+34 668 82 33 18</span><br>
								<span class= "desplegable_home_1"><strong>o escríbele</strong></span><br>    
								</td>
							  </tr>
							 
							  <tr>
								<td style="padding: 5px 5px 0 5px;">
								<span class="txt_contenido_secciones"><em>Nombre</em></span><br>
								<label>
								  <input name="nombre" type="text" id="1_nombre" size="25" style="width:200px;" />
								</label></td>
							  </tr>
							  <tr>
								<td style="padding: 5px 5px 0 5px;">
								<span class="txt_contenido_secciones"><em>Email</em></span><br>
								<input name="email" type="text" id="1_email" size="25" style="width:200px;" /></td>
							  </tr>
							  <tr>
								<td style="padding: 5px 5px 0 5px;">
								<span class="txt_contenido_secciones"><em>Consulta</em></span><br>
								<textarea name="consulta"  rows="5" id="1_consulta" style="width:200px;"></textarea></td>
							  </tr>
							  <tr>
								<td style="padding: 5px 5px 0 5px;" align="right"><input type="button" value="Enviar" style="border:1px solid #ccc;" onclick="envia_mail();"  />
								</td>
							  </tr>
							</table>
							</form>
							
							</div>
					</div>
					</td>
                </tr>
              </table></td>
            </tr>
          
            <tr>
              <td height="3" colspan="2" background="imagenes/fnd_filete.jpg"></td>
            </tr>
            <tr>
              <td height="5" colspan="2"></td>
            </tr>
            <tr>
              <td width="665" style="padding: 8px;"><span class="txt_entrada">Un proyecto <strong>The Primos</strong> © <strong>2013</strong></span></td>
              <td width="316" align="right" style="padding: 8px;"><img src="imagenes/pago_seguro.png" alt="Pago seguro" width="250" height="30" border="0" /></td>
            </tr>
             <tr>
              <td height="5" colspan="2"></td>
            </tr>
</table>

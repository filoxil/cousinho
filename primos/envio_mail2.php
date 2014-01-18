<?php

$a = $_GET["a"];
$n = $_GET["n"];
$e = $_GET["e"];
$c = $_GET["c"];


if ($n !=""){



$para      = 'alberto@lacasademisprimos.com';
$titulo = 'MAIL DESDE LA WEB';

$mensaje = $mensaje ."Nombre :  " .  $n . "\r\n";
$mensaje = $mensaje ."Email :  " .  $e . "\r\n";
$mensaje = $mensaje ."Consulta :  " .  $c . "\r\n";
$mensaje = $mensaje ."pagina origen :  " .  $_SERVER[HTTP_REFERER] . "\r\n";
$mensaje = $mensaje ."Apt: :  " .  $a . "\r\n";


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

?>
<body bgcolor="#FFFFFF" >
<table width="210" border="0" bgcolor="#FFFFFF">
<tr><td align="right"><a href="javascript:muestra_ventana2();" style=" text-decoration:none; color:#000000;"><img src="img/x.png" width="35" height="25" border="0"></a></td></tr>
  <tr>
    <td style="padding: 8px;">
GRACIAS POR CONTACTAR. EN BREVE NOS PONDREMOS EN CONTACTO CON USTED
    </td>
  </tr>

  </tr>
</table>
</body >
<?


}
?>
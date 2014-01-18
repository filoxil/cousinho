<?

$e=$_GET["e"];


if (strlen(trim($e))!=0){
		$mensaje="El usuario o contraseña no son correctos";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <div id="info" >

		<div id="registro">
        	<form method="post" action="index2.php">
                <table>

					<tr><td colspan="2" align="center"><font color="#f00" ><strong><? echo $mensaje;?></strong></font><br /></td></tr>
                    <tr>
                        <td align="right"><strong>Usuario :</strong></td>
                        <td><input type="text" name="user" class="boton_text" /></td>
                    </tr>
                    <tr>
                        <td align="right"><strong>Contraseña :</strong></td>
                        <td><input type="password" name="pass" class="boton_text" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Entrar" value="ENTRAR" class="boton_submit" /></td>
                    </tr>
                 </table>
        	</form>
        </div>

    </div>
    <div style="height:20px;"></div>
</body>
</html>

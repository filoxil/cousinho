<?
session_start();
$user=$_POST["user"];
$contra=$_POST["pass"];

	$servidor="internal-db.s174869.gridserver.com";
	$root = "db174869";
	$pass ="Madrid10";
	$conexion = mysql_connect("$servidor", "$root", "$pass");
	mysql_select_db("db174869_admin", $conexion);
	
if (strlen(trim($user))!=0){
 

	$queEmp = "SELECT * FROM usuarios where nombre='".$user."' and pass= '".$contra."'  ";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
	$totEmp = mysql_num_rows($resEmp); 

	if ($totEmp<= 0)
		{
?>
			<META http-equiv=”refresh” content="0;URL=index.php?e=1">
			<script>
	 			location.href ='index.php?e=1';
			</script>
<?
	}else{
		while ($rowEmp = mysql_fetch_assoc($resEmp)){
			$_SESSION['idtipousuario']=$rowEmp['idtipousuario'];
		}
		$_SESSION['pass_2']=1000;
	}
}

	if(strlen(trim($_SESSION['pass_2']))!=0)
	{



function propietario($iddueno)
{
	$queEmp2 = "select * from propietario  where idpropietario = ". $iddueno ;
	

	$servidor="internal-db.s174869.gridserver.com";
	$root = "db174869";
	$pass ="Madrid10";
	$conexion = mysql_connect("$servidor", "$root", "$pass");
	mysql_select_db("db174869_admin", $conexion);
	
	$resEmp2 = mysql_query($queEmp2, $conexion) or die(mysql_error());
	$totEmp2 = mysql_num_rows($resEmp2); 
	if ($totEmp2 > 0) {
		echo $rowEmp2['nombre'];
	}
}


		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>ADMINISTRACION - LOS PRIMOS</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <div id="info" >
        <div id="menu2">
        <table>
            <tr>
                <td><a href="index2.php" class="menu">APARTAMENTOS</a></td>
                <td class="menu">&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                <td class="menu"><a href="clientes.php" class="menu">CLIENTES</a></td>
                <td class="menu">&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                <td class="menu"><a href="tareas.php" class="menu">TAREAS</a></td>
                <td class="menu">&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                <td class="menu"><a href="empleados.php" class="menu">EMPLEADOS</a></td>
                <td class="menu">&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                <td></td>
            </tr>
        </table>




        </div>
        <div id="info2" >
<center><strong>APARTAMENTOS</strong></center>
<hr />
<br />
<table cellpadding="5" cellspacing="5">
	<tr>
		<td></td>
		<td>NOMBRE</td>
		<td>DIRECCIÓN</td>
		<td>CAPACIDAD</td>
		<td>PRECIO</td>
		<td>PROPIETARIO</td>
	</tr>

<?
	$queEmp = "select *  from pisos  ";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
	$totEmp = mysql_num_rows($resEmp); 
	if ($totEmp> 0) {
	   while ($rowEmp = mysql_fetch_assoc($resEmp)) {
			$idpiso=$rowEmp['idpiso'];
			$nombre=$rowEmp['nombre'];
			$direccion=$rowEmp['direccion'];
			$capacidad=$rowEmp['capacidad'];
			$precio=$rowEmp['precio'];
			$idpropietario=$rowEmp['idpropietario'];
			$idestado=$rowEmp['idestado'];
			$observaciones=$rowEmp['observaciones'];
			$imagen=$rowEmp['imagen'];
			
?>
	<tr><td  style="border-top: 1px solid #cccccc;" colspan="7"></td></tr>
	<tr>
		<td rowspan="2"><img src="/imagenes/<?  echo $imagen; ?>" width="100" /></td>
		<td width="200"><?  echo $nombre; ?></td>
		<td width="200"><?  echo $direccion; ?></td>
		<td width="100"><?  echo $capacidad; ?></td>
		<td width="100"><?  echo $precio; ?></td>
		<td width="100"><?  propietario ($idpropietario); ?></td>
		<td><input type="submit" value="VER" name="VER" class="boton_text" ></td>
	</tr>
	<tr><td colspan="5"><?  echo $observaciones; ?></td><td></td></tr>
<?
	   }
	}
?>	
</table>

        </div>
    </div>
    <div style="height:20px;"></div>
</body>
</html>
<?
}
?>

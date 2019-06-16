<?php
include("conexion.php");

$correo = $_POST["txtcorreo"];
$asunto = $_POST["txtasunto"];
$mensaje = $_POST["txtmensaje"];

$sql = "INSERT INTO CORREOS ( `tipo`, `correo`, `asunto`, `mensaje`, `estado`) VALUES ( '1', '$correo', '$asunto', '$mensaje', '1' )";

$conexion->query($sql);
if ( $conexion->connect_error )
	die ("Conexion fallada: ". $conexion->connect_error);
else
	echo "Mensaje enviado";

?>
<meta http-equiv="refresh" content="5;URL=index.html">
<?php
include("conexion.php");

$ID = $_GET["txtID"];

$sql = "DELETE FROM PRODUCTO WHERE ID='$ID' ";

$conexion->query($sql);
if ( $conexion->connect_error )
	die ("Conexion fallada: ". $conexion->connect_error);
else
	echo "Fila eliminada";

?>
<meta http-equiv="refresh" content="5;URL=listar.php">
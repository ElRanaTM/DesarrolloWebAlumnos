<?php
include("conexion.php");

$ID = $_POST["txtID"];
$Producto = $_POST["txtProducto"];
$Descripcion = $_POST["txtDescripcion"];
$Foto = $_POST["txtFoto"];
$Precio = $_POST["txtPrecio"];

$sql = "INSERT INTO PRODUCTO (`ID`, `Producto`, `Descripcion`, `Foto`, `Precio`) VALUES ('$ID', '$Producto', '$Descripcion', '$Foto', $Precio)";

$conexion->query($sql);
if ( $conexion->connect_error )
	die ("Conexion fallada: ". $conexion->connect_error);
else
	echo "Fila insertada";

?>
<meta http-equiv="refresh" content="5;URL=listar.php">
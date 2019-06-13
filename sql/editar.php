<?php
include("conexion.php");

$ID = $_GET["txtID"];
$Producto = $_GET["txtProducto"];
$Descripcion = $_GET["txtDescripcion"];
$Foto = $_GET["txtFoto"];
$Precio = $_GET["txtPrecio"];

$sql = "UPDATE PRODUCTO SET `Producto`= '$Producto', `Descripcion`= '$Descripcion', `Foto`='$Foto', `Precio`=$Precio WHERE ID='$ID'";

$conexion->query($sql);
if ( $conexion->connect_error )
	die ("Conexion fallada: ". $conexion->connect_error);
else
	echo "Fila editada";

?>
<meta http-equiv="refresh" content="5;URL=listar.php">
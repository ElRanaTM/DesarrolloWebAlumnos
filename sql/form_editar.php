<?php
include("conexion.php");
$id = $_GET["txtID"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario insertar</title>
</head>
<body>
	<form action="editar.php?txtID=<?php echo $_GET['txtID']; ?>" method="GET">
		<label for="txtProducto">Producto</label>
		<input type="text" name="txtProducto"><br>
		<label for="txtDescripcion">Descripción</label>
		<input type="text" name="txtDescripcion"><br>
		<label for="txtFoto">Foto</label>
		<input type="text" name="txtFoto"><br>
		<label for="txtPrecio">Precio</label>
		<input type="text" name="txtPrecio"><br>
		<input type="submit" value="Registrar"><br>
		<input type="reset" name="Borrar">
	</form>
</body>
</html>

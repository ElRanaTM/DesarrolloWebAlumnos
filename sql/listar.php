<?php 
include ("conexion.php");

$sql = "SELECT ID, Producto, Descripcion, Foto, Precio FROM PRODUCTO";

$resultado = $conexion->query($sql);

?>
<table border="1">
	<tr>
		<th>Producto</th>
		<th>Descripcion</th>
		<th>Foto</th>
		<th>Precio</th>
	</tr>
	<?php
	while ( $fila = $resultado->fetch_assoc() ) {
		?>
		<tr>
			<td> <?php echo $fila["Producto"]; ?> </td>
			<td> <?php echo $fila["Descripcion"]; ?> </td>
			<td> <img src=" <?php echo $fila["Foto"]; ?> " height="100" widht="200"> </td>
			<td> <?php echo $fila["Precio"]; ?> </td>
			<td><a href="form_editar.php?txtID=<?php echo $fila['ID']; ?>">Editar</a></td>
			<td><a href="eliminar.php?txtID=<?php echo $fila['ID']; ?>">Eliminar</a></td>
		</tr>
		<?php
	}
	?>
</table>
<a href="form_insertar.html">Insertar</a>
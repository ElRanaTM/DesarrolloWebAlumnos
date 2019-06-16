<script type="text/javascript" src="ajax.js"></script>
<?php 
include ("conexion.php");

$sql = "SELECT id, tipo, correo, asunto, mensaje, estado FROM CORREOS";

$resultado = $conexion->query($sql);

?>
<table border="1">
	<tr>
		<th>Correo</th>
		<th>Asunto</th>
		<th>Mensaje</th>
	</tr>
	<?php
	while ( $fila = $resultado->fetch_assoc() ) {
		if ($fila["tipo"] == "0") {
		?>
		<tr>
			<td> <?php echo $fila["correo"]; ?> </td>
			<td> <?php echo $fila["asunto"]; ?> </td>
			<td> <button onclick="llamar('leer_mensaje.php?txtid=<?php echo $fila['id']; ?>&txtpag=be')">Ver mensaje</button> </td>
		</tr>
		<?php
		}
	}
	?>
</table>
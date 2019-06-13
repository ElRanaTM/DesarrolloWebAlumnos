<?php 

$conexion = new mysqli("127.0.0.1", "root", "", "db_comercio");

if ( $conexion->connect_error )
	die ("Conexion fallada: ". $conexion->connect_error);

?>
<a href="listar.php">boi</a>
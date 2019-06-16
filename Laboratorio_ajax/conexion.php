<?php 

$conexion = new mysqli("127.0.0.1", "root", "", "bd_correo");

if ( $conexion->connect_error )
	die ("Conexion fallada: ". $conexion->connect_error);

?>
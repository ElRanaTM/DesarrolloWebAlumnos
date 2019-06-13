<?php
session_start();
include("clase.php")

if (isset($_SESSION["estante"]))
	$_SESSION["estante"]->mostrar($fila);
else
	echo "No existe el libro";
?>
<?php
session_start();
include("clase.php")
$fila = $_GET["txtFila"];

if (isset($_SESSION["estante"]))
	$_SESSION["estante"]->mostrar($fila);
else
	echo "No existe el libro";
?>
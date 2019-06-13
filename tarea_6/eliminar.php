<?php
session_start();
include("clase.php")
$fila = $_GET["txtFila"];

if (isset($_SESSION["estante"]))
	echo "El elemento eliminado es: ", $_SESSION["estante"]->eliminarLibro($fila);
else
	echo "No existe el libro";
?>
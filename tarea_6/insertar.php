<?php
session_start();
include("clase.php")
$fila = $_GET["txtFila"];
$libro = $_GET["txtLibro"];

if (!isset($_SESSION["estante"]))
	$_SESSION["estante"] = new Estante();
$_SESSION["estante"]->inserarLibro($fila, $libro);
?>
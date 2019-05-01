<?php include("clase_lab_2.php"); 
session_start();

$cadena = $_POST["txtC"];

if (!isset($_SESSION["lab"]))
	$_SESSION["lab"] = new Laboratorio2(0,"",0,0,0);
$_SESSION["lab"]->set_cadena($cadena);
$_SESSION["lab"]->piramide();

?>
<br><a href="index.php">Volver</a>
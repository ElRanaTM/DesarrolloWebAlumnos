<?php include("clase_lab_2.php"); 
session_start();

$n = $_POST["txtN"];

if (!isset($_SESSION["lab"]))
	$_SESSION["lab"] = new Laboratorio2(0,"",0,0,0);
$_SESSION["lab"]->set_n($n);
echo $_SESSION["lab"]->calcularFibonaci();
?>
<br><a href="index.php">Volver</a>
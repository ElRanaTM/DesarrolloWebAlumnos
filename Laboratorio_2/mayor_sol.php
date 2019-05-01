<?php include("clase_lab_2.php"); 
session_start();

$n1 = $_POST["txtN1"];
$n2 = $_POST["txtN2"];
$n3 = $_POST["txtN3"];

if (!isset($_SESSION["lab"]))
	$_SESSION["lab"] = new Laboratorio2(0,"",0,0,0);
$_SESSION["lab"]->set_a_b_c($n1,$n2,$n3);
echo $_SESSION["lab"]->calcularMayor();
?>
<br><a href="index.php">Volver</a>
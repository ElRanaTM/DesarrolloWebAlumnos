<?php include("clase_lab_2.php"); 
session_start();

if (!isset($_SESSION["lab"]))
	echo "No ha inicializao la clase";
else
{
	echo "N: ",$_SESSION["lab"]->get_n(),"<br>";
	echo "Cadena: ",$_SESSION["lab"]->get_cadena(),"<br>";
	echo "A: ",$_SESSION["lab"]->get_a(),"<br>";
	echo "B: ",$_SESSION["lab"]->get_b(),"<br>";
	echo "C: ",$_SESSION["lab"]->get_c(),"<br>";
}


?>
<br><a href="index.php">Volver</a>
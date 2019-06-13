<?php
$d = $_GET["dia"];
$res = "";

switch ($d) {
	case 1:
		$res = "Lunes";
		break;
	case 2:
		$res = "Martes";
		break;
	case 3:
		$res = "Miercoles";
		break;
	case 4:
		$res = "Jueves";
		break;
	case 5:
		$res = "Viernes";
		break;
	case 6:
		$res = "Sabado";
		break;
	case 7:
		$res = "Domingo";
		break;
	default:
		$res = "Dia incorrecto";
		break;
}

?>
<p>Dia <?php echo $res; ?></p>

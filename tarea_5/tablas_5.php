<?php
$n = $_GET["num"];
$res = "";

if($n % 2 == 0) $res = "par";
else $res = "impar";
?>
<p>El numero introducido es: <?php echo $res; ?></p>

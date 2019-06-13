<link rel="stylesheet" type="text/css" href="tablas.css">
<?php
$n = $_GET["txtn"];

?>
<table border="1">
	<?php
	for ($i=1; $i <= $n; $i++) { 
	?>
	<tr>
		<td><div class="<?php 
		switch ($i % 3) {
			case 1:
				echo("rojo");
				break;
			case 2:
				echo("amarillo");
				break;
			default:
				echo("verde");
				break;
		}
		 ?>"></div></td>
	</tr>
	<?php } ?>
</table>
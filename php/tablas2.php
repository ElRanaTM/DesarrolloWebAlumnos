<style type="text/css" src="tablas2.css"></style>
<?php
$n = $_GET["txtn2"];

?>
<table border="1">
	<?php
	for ($i=1; $i <= $n; $i++) { 
	?>
	<tr>
		<td><div class="<?php 
		switch ($i % 3) {
			case 1:
				?>rojo<?php;
				break;
			case 2:
				?>amarillo<?php;
				break;
			default:
				?>verde<?php;
				break;
		}
		 ?>"></div></td>
	</tr>
	<?php } ?>
</table>
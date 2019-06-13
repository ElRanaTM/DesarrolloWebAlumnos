<?php
$f = $_GET["filas"];
$c = $_GET["columnas"];
$h = $_GET["height"];
$w = $_GET["width"];

?>
<table border="1" height="<?php echo $h; ?>" width="<?php echo $w; ?>">
	<?php
	for ($i=0; $i < $f; $i++) { 
	?>
	<tr>
		<?php
		for ($j=0; $j < $c; $j++) { 
		?>
		<td><?php 
		if ($j==0) echo $j;
		if ($i==0) echo $i;
		if ($i!=0 or $j!=0) echo ($i+$j)-1; ?></td>
		<?php } ?>
	</tr>
	<?php } ?>
</table>
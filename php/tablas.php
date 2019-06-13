<?php
$multiplo = $_GET["txtn"];

/*

echo "<table border=1>";
for ($i=1; $i <= 10; $i++) {
	echo "<tr>"; 
	echo "<td>", $multiplo,"</td><td> x </td><td>",$i,"</td><td> = </td><td>",$i*$multiplo,"</td>";
	echo "</tr>";
}
echo "</table>";

*/

?>
<table border="5">
	<?php
	for ($i=1; $i <= 10; $i++) { 
	?>
	<tr>
		<td><?php echo $multiplo; ?></td>
		<td> x </td>
		<td><?php echo $i; ?></td>
		<td> = </td>
		<td><?php echo $multiplo * $i; ?></td>
	</tr>
	<?php } ?>
</table>
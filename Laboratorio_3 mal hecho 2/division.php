<?php
$num=$_GET["txtN"];
?>
<table border="2">
<?php
for ($i=1; $i <= 10; $i++) { 
?>
		<tr>
			<td><?php echo $num; ?></td>
			<td><?php echo $i; ?></td>
			<td><?php echo $num / $i; ?></td>
		</tr>
<?php	
}
?>
</table>

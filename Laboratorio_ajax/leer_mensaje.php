<script type="text/javascript" src="ajax.js"></script>
<?php
include("conexion.php");

$id = $_GET["txtid"];
$pagina = $_GET["txtpag"];

$sql = "SELECT id, tipo, correo, asunto, mensaje, estado FROM CORREOS WHERE id = $id";

$resultado = $conexion->query($sql);

?>
<p><?php echo $resultado->fetch_assoc()["mensaje"]; ?></p>

<?php 
if ($pagina == "be") {
?>
<button onclick="llamar('bandeja_de_entrada.php')">Volver</button>
<?php 
}elseif ($pagina == "ce") {
?>
<button onclick="llamar('correos_enviados.php')">Volver</button>
<?php 
}
?>
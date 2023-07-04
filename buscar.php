<?php
include'conexion.php';
$id=$_GET['id'];
$consulta="select * from usuario where id ='".$id."'";
$resultado=$conexion->query($consulta);

while($fila=$resultado ->fetch_array()){
	$registro[]=array_map('utf8_encode',$fila);
	}
echo json_encode($registro);
$resultado->close();
?>+
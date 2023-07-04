<?php
include'conexion.php';
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$estado=$_POST['estado'];

$consulta="insert into usuario values ('".$id."','".$nombre."','".$estado."')";
mysql_query($conexion,$consulta) or die (mysql_error());
mysql_close($conexion);

?>
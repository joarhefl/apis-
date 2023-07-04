<?php
include'conexion.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];

$consulta="UPDATE usuario SET nombre='".$nombre."','".$edad.'".$id."'WHERE id ='".$id."'";
$conexion,$consulta) or die (mysql_error());
mysql_close($conexion);

?>
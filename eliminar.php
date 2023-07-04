<?php
include'conexion.php';
$id=$_GET['id'];
$consulta="delate from usuario where id ='".$id."'";
mysql_query($conexion,$consulta) or die (mysql_error());
mysql_close($conexion);

?>
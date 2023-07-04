<?php
$hostname = 'localhost';
$database = 'ejmplo001';
$username = 'root';
$password = '';

$conexion = new mysqli($hostname, $username, $password, $database);
if ($conexion->connect_error) {
    echo "Problemas de conexión: " . $conexion->connect_error;
}
?>

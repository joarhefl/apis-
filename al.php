<?php
include 'Conexion01.php';

$pdo=new Conexion();

if ($_SERVER['REQUEST_METHOD']=='GET'){
	if(isset($_GET['id'])){
	$sql=$pdo->prepare("SELECT * FROM usuario WHERE id=:id");
	$sql->bindValue(':id',$_GET['id']);
	$sql->execute();
	$sql->setFetchMode(PDO::FETCH_ASSOC);
	header("HTTP/1.1 200 ok");
	echo json_encode($sql->fetchAll());
	exit;
	
	}else{

$sql=$pdo->prepare("SELECT * FROM usuario");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
header ("HTTP/1.1 200 ok");
echo json_encode($sql->fetchAll());
exit;
	}
	
}




if ($_SERVER['REQUEST_METHOD']=='POST'){
	$sql="INSERT INTO usuario (id, nombre, edad) VALUES (:id,:nombre,
	:edad)";
	$stmt=$pdo->prepare($sql);
	$stmt->bindValue(':id',$_POST['id']);
	$stmt->bindValue(':nombre',$_POST['nombre']);
	$stmt->bindValue(':edad',$_POST['edad']);
	$stmt->execute();
	$idPost=$pdo->lastInsertId();
	if($idPost){
	header ("HTTP/1.1 200 ok");
	echo json_encode($idPost);
	exit;
	}
}



if ($_SERVER['REQUEST METHOD']=='DELETE'){
	$sql="DELETE FROM usuario WHERE id=id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindValue(':id', $_GET['id']);
	$stm->execute();
	header("HTTP/1.1 200 OK");
	exit;
}

header ("HTTP/1.1 400 Bad REQUEST_METHOD");


?>

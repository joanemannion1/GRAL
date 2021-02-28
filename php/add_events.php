<?php

// Conexion a la base de datos
require_once('db_connect.php');

if (isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['fecha']) && isset($_POST['notas'])){
	
	$title = $_POST['nombre'];
	$usuario = $_POST['usuario'];
	$date = $_POST['fecha'];
	$description = $_POST['notas'];

	$sql = "INSERT INTO events(title, usuario, date, description) values ('$title', '$usuario', '$date', '$description')";
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>

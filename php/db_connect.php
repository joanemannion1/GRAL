<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sosracismo";
$conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$db_select = mysqli_select_db($conn,$dbname);
if (!$db_select) {
    $db_create = "CREATE DATABASE IF NOT EXISTS $dbname";
    $db_selected = mysqli_query($conn,$db_create);

  if (!$db_selected) {
      printf ('Error creating database: ' . mysqli_error() . "\n");
  }
}

$db_login_create ="CREATE TABLE IF NOT EXISTS trabajador (
   		email VARCHAR(255) PRIMARY KEY,
   		nombre VARCHAR(255),
   		contraseña varchar(255) DEFAULT NULL,
   		admin BOOLEAN,
   		UNIQUE KEY email (email)
   	)  ENGINE=INNODB;";

$db_users_create ="CREATE TABLE IF NOT EXISTS usuarios (
   		nombre_completo VARCHAR(255),
   		tipo_documentacion VARCHAR(255),
   		n_documentacion VARCHAR(255) PRIMARY KEY,
   		genero varchar(255),
   		email varchar(255),
   		telefono varchar(255), -- ez det numeriko jarri ze bestela 0z hasteyan zenabkiak ez dia onartuko
   		direccion varchar(255), 
   		cp Char(6), /*char(6) Canadakuak ebai onartzeko*/
      municipio varchar(255),
   		provincia varchar(255),
   		pais CHAR(2),
   		nacionalidad CHAR(2),
   		UNIQUE KEY n_documentacion (n_documentacion)
   	)  ENGINE=INNODB;";


if (($conn->query($db_login_create) === FALSE) or ($conn->query($db_users_create) === FALSE)) {
  echo "Error creating table: " . $conn->error;
}
?>
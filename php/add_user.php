<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  	<?php include 'db_connect.php' ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        /* ---- Información personal -----*/
      	$nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $nombre_completo = $_POST['nombre'] . " " .$_POST['apellido1'] . " " . $_POST['apellido2'];
        $tipo_documentacion = $_POST['tipodoc'];
        $n_documentacion = $_POST['ndoc'];
        $genero = $_POST['genero'];

        /* ---- Datos de contacto -----*/
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        /* ---- Dirección -----*/
        $direccion = $_POST['direccion'];
        $cp = $_POST['cp'];
        $municipio = $_POST['municipio'];
        $provincia = $_POST['provincia'];
        $pais = $_POST['pais'];
        $nacionalidad = $_POST['nacionalidad'];


        if(empty($nombre) || empty($apellido1) || empty($tipo_documentacion) || empty($n_documentacion) || empty($telefono)){
          echo "<script> alert('No puede haber opciones vacias');
                         window.history.back(); 

          </script>";
          exit;
        }

        $sql = "INSERT INTO usuarios (nombre_completo, nombre, apellido1, apellido2, tipo_documentacion, n_documentacion, genero, email, telefono, direccion, cp, municipio, provincia, pais, nacionalidad) VALUES ('$nombre_completo', $nombre', '$apellido1', '$apellido2', '$tipo_documentacion', '$n_documentacion', '$genero', '$email', '$telefono', '$direccion', '$cp', '$municipio', '$provincia', '$pais', '$nacionalidad')";

        if (mysqli_query($conn, $sql)) {
          if(isset($_POST["guardar"])) {
            header("location: index.php"); 
          }
          else if(isset($_POST["intervencion"])) {
            header("location: añadirIntervencion.php"); 
          }
        }
        else{
          echo("Error description: " . mysqli_error($conn));
          echo("<br><br>");
          echo("<button onclick=\"window.history.back();\"> Saiatu berriro </button>");
          echo("<br><br>");
        }
      }
    
    ?>
  </body>
  </html>
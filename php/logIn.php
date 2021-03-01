<?php
  session_start();
?>
<head>
	<title>Log in</title>

	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <?php include ('db_connect.php'); ?>
</head>
<body class="text-center">
  <div class="jumbotron vertical-center bg-white">
  <div class="w-25 container padding25">
    <form class="form-signin" action="logIn.php" method="post" enctype = "multipart/form-data">
      <img class="mb-4" src="../images/logo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
      <label for="inputEmail" class="sr-only">Correo electrónico</label>
        <input type="email" id="inputEmail" name="usuario" class="mb-3 form-control" name="email" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only" >Contraseña</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>

      <button type="submit" class="btn btn-lg btn-primary btn-block" name="submitButton">Iniciar</button>
    </form>
  </div>
</div>
</body>

<?php

if(isset($_POST['submitButton'])){

      $email = $_POST['usuario'];
      $contraseña = $_POST['inputPassword'];
    
      $sql = sprintf("SELECT * FROM trabajador WHERE email='$email'");
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    if($row['email']==$email && $row['contraseña']==$contraseña) {
      // Guardo en la sesión el email del usuario.
      $_SESSION['email'] = $email;
     
      // Redirecciono al usuario a la página principal del sitio.
      header("HTTP/1.1 302 Moved Temporarily"); 
      header("location: index.php"); 
   }else{
     echo 'El email o password es incorrecto, vuleve a intentarlo';
   }
}
  
?>
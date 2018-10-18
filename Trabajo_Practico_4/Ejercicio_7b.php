<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio N°7</title>
  </head>
  <body>
  <h4>Ejercicio N°7</h4>
  <?php
    session_start();
    if(empty($_SESSION["reg"])){
      header('location: Ejercicio_7.php');
    }else{
      echo "Usuario registrado y logueado->> ".$_SESSION["usr"];
    }
    ?>
  </body>
</html>

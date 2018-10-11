<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°6
    </title>
  </head>
  <body>
    <h4>Ejercicio N°6</h4>
    <?php
      session_start();
      echo "Usuario: {$_SESSION['usuario']}";
     ?>
  </body>
</html>

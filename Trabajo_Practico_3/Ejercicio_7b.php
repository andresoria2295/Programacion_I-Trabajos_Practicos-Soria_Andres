<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Página Home
    </title>
  </head>
  <body>
    <h4>Página Home</h4>
    <?php
      session_start();
      echo "Usuario: {$_SESSION['usuario']}";
      echo "<br><br>";
     ?>
     <a href="Ejercicio_7c.php">Página N°1</a>
     <br><br>
     <a href="Ejercicio_7d.php">Página N°2</a>
     <br><br>
     <a href="Ejercicio_7e.php">Página N°3</a>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Página N°2
    </title>
  </head>
  <body>
    <h4>Página N°2</h4>
    <?php
      session_start();
      echo "Usuario: {$_SESSION['usuario']}";
      echo "<br><br>";
     ?>
     <a href="Ejercicio_7c.php">Página N°1</a>
     <br><br>
     <a href="Ejercicio_7e.php">Página N°3</a>
     <br><br>
     <a href="Ejercicio_7b.php">Página Home</a>
  </body>
</html>

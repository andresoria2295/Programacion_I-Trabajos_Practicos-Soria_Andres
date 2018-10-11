<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Página N°3
    </title>
  </head>
  <body>
    <h4>Página N°3</h4>
    <?php
      session_start();
      echo "Usuario: {$_SESSION['usuario']}";
      echo "<br><br>";
     ?>
     <a href="Ejercicio_7c.php">Página N°1</a>
     <br><br>
     <a href="Ejercicio_7d.php">Página N°2</a>
     <br><br>
     <a href="Ejercicio_7b.php">Página Home</a>
  </body>
</html>

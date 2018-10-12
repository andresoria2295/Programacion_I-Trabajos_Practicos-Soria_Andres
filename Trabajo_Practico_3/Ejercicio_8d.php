<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Página N°2
    </title>
  </head>
  <body>
    <?php
      session_start();

      if (empty($_SESSION['usuario'])) {
        header('location: Retorno_8.php');
        exit;
      }
      ?>
      <h4>Página N°2</h4>
      <?php
      echo "Usuario: {$_SESSION['usuario']}";
      echo "<br><br>";
     ?>
     <a href="Ejercicio_8c.php">Página N°1</a>
     <br><br>
     <a href="Ejercicio_8e.php">Página N°3</a>
     <br><br>
     <a href="Ejercicio_8b.php">Página Home</a>
  </body>
</html>

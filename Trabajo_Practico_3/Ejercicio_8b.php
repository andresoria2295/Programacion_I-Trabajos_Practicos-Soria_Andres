<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Página Home
    </title>
  </head>
  <body>
    <?php
      session_start();

      if (empty($_SESSION['usuario'])) {
        header('Location: retorno.php');
        exit;
      }
      ?>
      <h4>Página Home</h4>
      <?php
      echo "Usuario: {$_SESSION['usuario']}";
      echo "<br><br>";
     ?>
     <a href="Ejercicio_8c.php">Página N°1</a>
     <br><br>
     <a href="Ejercicio_8d.php">Página N°2</a>
     <br><br>
     <a href="Ejercicio_8e.php">Página N°3</a>
  </body>
</html>

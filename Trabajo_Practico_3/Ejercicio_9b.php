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

      $date_home = date('Y-m-d H:i:s');
      $_SESSION['date_home'] = $date_home;

      if (empty($_SESSION['usuario'])) {
        $archivo = fopen('Registro_9.txt', 'w+');
        fwrite($archivo, ' '.$_SESSION['date_home'].';Ejercicio_9b.php'.PHP_EOL);
        fclose($archivo);
        header('location: Retorno_9.php');
        exit;
      }
      ?>
      <h4>Página Home</h4>
      <?php
      echo "Usuario: {$_SESSION['usuario']}";
      echo "<br><br>";

      $archivo = fopen('Registro_9.txt', 'w+');
      fwrite($archivo, ' '.$_SESSION['date_home'].';Ejercicio_9b.php'.PHP_EOL);
      fclose($archivo);
      ?>

     <a href="Ejercicio_9c.php">Página N°1</a>
     <br><br>
     <a href="Ejercicio_9d.php">Página N°2</a>
     <br><br>
     <a href="Ejercicio_9e.php">Página N°3</a>
  </body>
</html>

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
        header('location: Retorno_9.php');
        exit;
      }
      ?>
      <h4>Página N°2</h4>
      <?php
      echo "Usuario: {$_SESSION['usuario']}";
      echo "<br><br>";

      $date_p2 = date('Y-m-d H:i:s');
      $_SESSION['date_p2'] = $date_p2;
      $archivo = fopen('Registro_9.txt', 'w+');
      fwrite($archivo, ' '.$_SESSION['date_home'].';Ejercicio_9b.php'.PHP_EOL);
      fwrite($archivo, ' '.$_SESSION['date_p1'].';Ejercicio_9c.php'.PHP_EOL);
      fwrite($archivo, ' '.$_SESSION['date_p2'].';Ejercicio_9d.php'.PHP_EOL);
      fwrite($archivo, ' '.$_SESSION['date_p3'].';Ejercicio_9e.php'.PHP_EOL);
      fclose($archivo);
     ?>

     <a href="Ejercicio_9c.php">Página N°1</a>
     <br><br>
     <a href="Ejercicio_9e.php">Página N°3</a>
     <br><br>
     <a href="Ejercicio_9b.php">Página Home</a>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Página N°1
    </title>
  </head>
  <body>
    <?php
      session_start();

      if (empty($_SESSION['usuario'])) {
        header('location: Retorno_10.php');
        exit;
      }
      ?>
      <h4>Página N°1</h4>
      <?php
      echo "Usuario: {$_SESSION['usuario']}";
      echo "<br><br>";

      $date_p1 = date(Y-m-d H:i:s);
      $_SESSION['date_p1'] = $date_p1;
      fopen('Registro_10.txt', "w+");
      fwrite($archivo, ' '.$_SESSION['date_home'].';Ejercicio_10b.php'.PHP_EOL);
      fwrite($archivo, ' '.$_SESSION['date_p1'].';Ejercicio_10c.php'.PHP_EOL);
      fwrite($archivo, ' '.$_SESSION['date_p2'].';Ejercicio_10d.php'.PHP_EOL);
      fwrite($archivo, ' '.$_SESSION['date_p3'].';Ejercicio_10e.php'.PHP_EOL);
      fclose($archivo);
     ?>

     <a href="Ejercicio_10d.php">Página N°2</a>
     <br><br>
     <a href="Ejercicio_10e.php">Página N°3</a>
     <br><br>
     <a href="Ejercicio_10b.php">Página Home</a>
  </body>
</html>

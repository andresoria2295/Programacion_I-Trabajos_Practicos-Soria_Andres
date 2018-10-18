<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°4
    </title>
  </head>
  <body>
    <h4>Ejercicio N° 4</h4>
    <?php
      $id = $_GET['id'];
      $servidor = 'localhost';
      $usuario = 'andres';
      $clave = '231148';
      $base = 'programacion1';

      $conexion = new PDO("mysql: host=$servidor; dbname=$base", $usuario, $clave);

      $registro = array('id' => $id);

      $sql = "DELETE FROM persona WHERE id = :id";
      $ejec_sql = $conexion -> prepare($sql);
      $ejec_sql -> execute($registro);
      echo "$id";
      header('location: Ejercicio_4.php');
     ?>
  </body>
</html>

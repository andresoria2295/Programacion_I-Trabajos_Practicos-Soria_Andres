<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio N°5</title>
  </head>
  <body>
    <h4>Ejercicio N°5</h4>
    <?php
      $id = $_POST['id'];
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $dni = $_POST['dni'];
      $age = $_POST['age'];

      $servidor = 'localhost';
      $usuario = 'andres';
      $clave = '231148';
      $base = 'programacion1';

      $conexion = new PDO("mysql: host=$servidor; dbname=$base", $usuario, $clave);

      $sql = "select * from persona";
      $ejec_sql = $conexion -> prepare($sql);
      $ejec_sql -> execute();

      $registro = array('id' => $id, 'nombre' => $name, 'apellido' => $surname, 'documento' => $dni, 'edad' => $age);

      $sql = "UPDATE persona SET nombre = :nombre, apellido = :apellido, documento = :documento, edad = :edad WHERE id = :id";
      $ejec_sql = $conexion-> prepare($sql);
      $ejec_sql -> execute($registro);

      header('location: Ejercicio_5.php');
     ?>
  </body>
</html>

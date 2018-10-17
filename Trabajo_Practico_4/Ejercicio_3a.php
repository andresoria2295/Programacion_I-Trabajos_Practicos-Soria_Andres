<?php
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $dni = $_POST['dni'];
  $age = $_POST['age'];

  $servidor = 'localhost';
  $usuario = 'andres';
  $clave = '231148';
  $base = 'programacion1';

  $conexion = new PDO("mysql: host=$servidor; dbname=$base", $usuario, $clave);

  $sql = 'select * from persona';
  $ejec_sql = $conexion->prepare($sql);
  $ejec_sql -> execute();

  $registro = array('nombre' => $name, 'apellido' => $surname, 'documento'=> $dni, 'edad'=> $age);

  $sql = "INSERT INTO persona (nombre, apellido, documento, edad) VALUES (:nombre, :apellido, :documento, :edad)";
  $ejec_sql = $conexion -> prepare($sql);
  $ejec_sql -> execute($registro);

  header('location: Ejercicio_3.php');
  die();
 ?>

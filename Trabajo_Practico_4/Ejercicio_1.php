<?php
  $servidor = 'localhost';
  $usuario = 'andres';
  $clave = '231148';
  $base = 'programacion1';

  $conexion = new PDO("mysql: host=$servidor; dbname=$base", $usuario, $clave);

  $sql = 'select * from persona';
  $ejec_sql = $conexion -> prepare($sql);
  $ejec_sql -> execute();

  echo "<pre>";

  while ($fila = $ejec_sql -> fetch(PDO::FETCH_ASSOC)) {
    print_r($fila);
  }

  $registros = array(array('nombre' => 'Lucas', 'apellido' => 'Fernandez', 'documento'=>'39546321', 'edad'=>'23'),
                     array('nombre' => 'Agustin', 'apellido' => 'Rossi', 'documento'=>'21852369', 'edad'=>'48'),
                     array('nombre' => 'Sergio', 'apellido' => 'Tobares', 'documento'=>'30532175', 'edad'=>'36'));

  foreach ($registros as $key){
    $sql = "INSERT INTO persona (nombre, apellido, documento, edad) VALUES (:nombre, :apellido, :documento, :edad)";
    $ejec_sql = $conexion -> prepare($sql);
    $ejec_sql -> execute($key);
}

  echo "</pre>";
  die();
 ?>

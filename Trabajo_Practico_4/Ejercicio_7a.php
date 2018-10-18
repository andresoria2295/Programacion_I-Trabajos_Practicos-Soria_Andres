<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio N°7</title>
  </head>
  <body>
    <h4>Ejercicio N°7</h4>
    <?php
      session_start();

      $user = $_POST['usr'];
      $pass = $_POST['pass'];

      $servidor = 'localhost';
      $usuario = 'andres';
      $clave = '231148';
      $base = 'programacion1';

      $conexion = new PDO("mysql: host=$servidor; dbname=$base", $usuario, $clave);

      $datos = array("usuario" => $user, "clave" => $pass);
      //$datos=array("usuario" => $usr);
      //$sql = "SELECT * FROM usuario WHERE usuario =: usuario AND clave =: clave";
      $sql = "SELECT usuario, clave FROM usuario WHERE usuario = :usuario AND clave = :clave";
      //$sql= "select * from usuario";
      $ejec_sql = $conexion -> prepare($sql);
      $ejec_sql -> execute($datos);

      while($fila = $ejec_sql -> fetch(PDO::FETCH_ASSOC)){
        $c++;
      }
      if($c > 0){
        $_SESSION['usr'] = $user;
        $_SESSION['reg'] = 1; //flag

        header('location: Ejercicio_7b.php');
      }else{
        header('location: Ejercicio_7.php');
      }
      ?>
  </body>
</html>

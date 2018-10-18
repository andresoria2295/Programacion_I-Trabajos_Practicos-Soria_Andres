<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Registro_Base
    </title>
  </head>
  <body>
    <?php
      function conexion($servidor, $base, $user, $password){
        return new PDO("mysql: host=$servidor; dbname=$base", $user, $password);
      }

      $conexion = conexion("localhost","programacion1", "andres", "231148");
      $estado = $conexion -> getAttribute(PDO::ATTR_CONNECTION_STATUS);

      if($_POST['usr']!="" && $_POST['pass']!=""){
        $user = $_POST['usr'];
        $password = $_POST['pass'];

        $sql = "INSERT INTO `usuario` (`id`, `usuario`, `clave`, `habilitado`, `rol`) VALUES (NULL, ?, ?, NULL, 'usuario');";
        $preparado = $conexion -> prepare($sql);
        $ejec_sql = $preparado -> execute([$user, $password]);

        if($ejec_sql == 1){
            header('location: p1.php');
        }
      } else {
          echo "Incorrecto";
      }
    ?>
  </body>
</html>

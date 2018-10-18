<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
  </head>
  <body>
    <h4>Inicio de Sesión</h4>
    <?php
    $user = $_POST['usr'];
    $password = $_POST['pass'];

    function conexion($servidor, $base, $user, $password){
    return new PDO("mysql: host=$servidor; dbname=$base", $user, $password);
      }

    $conexion = conexion("localhost","programacion1", "andres", "231148");
    $estado = $conexion -> getAttribute(PDO::ATTR_CONNECTION_STATUS);

    $sql = "SELECT usuario, clave FROM usuario WHERE usuario=? AND clave=?";
    $preparado = $conexion -> prepare($sql);
    $ejec_sql = $preparado -> execute([$user, $password]);

    $datos = $preparado -> fetch(PDO::FETCH_ASSOC);

    if($datos['usuario'] == $user && $datos['clave'] == $password){
               if($datos['habilitado'] == "0"){
                   echo "Usuario existente pero no habilitado";
               } else {
                   session_start();
                   $_SESSION['username'] = $datos['usuario'];
                   $_SESSION['rol'] = $datos['rol'];
                   if($_SESSION['rol'] == "admin"){
                       header('location: admin.php');
                       exit();
                   } else {
                       header('location: usuario.php');
                       exit();
                   }
               }
       } else {
           echo "Datos incorrectos";
       }
    ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio N°5</title>
  </head>
  <body>
    <h4>Ejercicio N°5</h4>
    <form action="Ejercicio_5c.php" method="POST">

    <?php
      $id = $_GET['id'];

      $servidor ='localhost';
      $usuario = 'andres';
      $clave = '231148';
      $base = 'programacion1';

      $conexion = new PDO("mysql: host=$servidor; dbname=$base", $usuario, $clave);

      $sql = "select * from persona";
      $ejec_sql = $conexion -> prepare($sql);
      $ejec_sql -> execute();

      $registro = array("id" => $id);

      while($fila = $ejec_sql -> fetch(PDO::FETCH_ASSOC)){
        foreach($fila as $campo){
          if($fila['id'] == $id){
            echo "ID: ";
            echo "<input type=\"text\" name=\"id\" value=\"$fila[id]\">";
            echo "<br><br>";
            echo "Nombre: ";
            echo "<input type=\"text\" name=\"name\" value=\"$fila[nombre]\">";
            echo "<br><br>";
            echo "Apellido: ";
            echo "<input type=\"text\" name=\"surname\" value=\"$fila[apellido]\">";
            echo "<br><br>";
            echo "Documento: ";
            echo "<input type=\"text\" name=\"dni\" value=\"$fila[documento]\">";
            echo "<br><br>";
            echo "Edad: ";
            echo "<input type=\"text\" name=\"age\" value=\"$fila[edad]\">";
            echo "<br><br>";
            break;
          }
        }
      }
     ?>
    <input type="submit" name="edicion" value="Enviar edición de registro">
   </form>
  </body>
</html>

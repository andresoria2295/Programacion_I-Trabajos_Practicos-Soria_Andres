<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio N°6</title>
  </head>
  <body>
  <h4>Ejercicio N°6</h4>
  <table border="2">
      <?php
        $servidor = 'localhost';
        $usuario = 'andres';
        $clave = '231148';
        $base = 'programacion1';

        $conexion = new PDO("mysql: host=$servidor; dbname=$base", $usuario, $clave);

        $sql = "select	nombre as Nombre,	apellido	as	Apellido,	concat(apellido,',	',	nombre)	as	NombreCompleto, documento as DNI, edad as Edad	from	persona";
        $ejec_sql = $conexion -> prepare($sql);
        $ejec_sql -> execute();

        $i = 0;
        echo"<tr>";
        while ($fila = $ejec_sql -> getColumnmeta($i)) {
          echo"<td> ";
          echo $fila['name'];
          echo"</td>";
          $i++;
        }
        while ($fila = $ejec_sql -> fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          foreach ($fila as $nombre => $valor) {
            echo "<td>";
            echo "$valor";
            echo "</td>";
          }
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°4
    </title>
  </head>
  <body>
    <h4>Ejercicio N°4</h4>
    <p>Listado de datos registrados en tabla persona de la base de datos "programacion1": </p>
    <table border="2">
      <?php
        $servidor = 'localhost';
        $usuario = 'andres';
        $clave = '231148';
        $base = 'programacion1';

        $conexion = new PDO("mysql: host=$servidor; dbname=$base", $usuario, $clave);

        $sql = 'select * from persona';
        $ejec_sql = $conexion -> prepare($sql);
        $ejec_sql -> execute();

        while ($fila = $ejec_sql -> fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          foreach ($fila as $campo) {
            echo "<td>";
            echo "$campo";
            echo "</td>";
          }
          echo "<td>";
          echo "<a href='Ejercicio_4a.php?id=".$fila['id']."'>Borrar registro</a>";
          echo "</td>";
          echo "</tr>";
        }
       ?>
    </table>
  </body>
</html>

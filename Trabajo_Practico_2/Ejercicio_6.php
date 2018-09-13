<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°6
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°6
    </h4>
    <table>
      <?php
      $row = $_POST['fila'];
      $column = $_POST['columna'];
      echo "<br>";
      echo "Número de filas ingresadas: $row";
      echo "<br><br>";
      echo "Número de columnas ingresadas: $column";

      echo "<br><br>";
      $contador = 0;
      for ($f=0; $f < $row; $f++) {
        echo "<tr>";
        for ($c=0; $c < $column; $c++) {
          echo "<td> $contador </td>";
          $contador++;
        }
        echo "</tr>";
      }
       ?>
    </table>
  </body>
</html>

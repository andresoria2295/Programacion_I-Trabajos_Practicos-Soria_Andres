<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°8
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°8
    </h4>
    <table>
      <?php
        $contador = 0;
        echo "a) Tabla html de 5x5 con valores incrementados en 1:";
        echo "<br><br>";
        for ($f=0; $f < 5; $f++) {
          echo "<tr>";
          for ($c=0; $c < 5; $c++) {
            echo "<td> $contador </td>";
            $contador++;
          }
          echo "</tr>";
        }
       ?>
     </table>
  </body>
</html>

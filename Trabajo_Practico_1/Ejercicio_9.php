<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°9
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°9
    </h4>
    <table>
      <?php
        $letra = "a";
        $numero = 1;
        $mezcla = "A1";
        echo "a) Tabla html de 6x6: ";
        echo "<br><br>";
        for ($f=0; $f < 6; $f++) {
          echo "<tr>";
          for ($c=0; $c < 6; $c++) {
            if ($f==0 && $c==0) {
              echo "<td>";
              echo "</td>";
            }else {
              if ($f == 0) {
              echo "<td>";
              echo "$letra";
              echo "</td>";
              $letra++;
            }else {
              if ($c == 0) {
                echo "<td>";
                echo "$numero";
                echo "</td>";
                $numero++;
              }else {
                echo "<td>";
                echo "$mezcla";
                echo "</td>";
                $mezcla++;
              }
            }
            }
          }
          echo "</tr>";
        }
       ?>
     </table>
  </body>
</html>

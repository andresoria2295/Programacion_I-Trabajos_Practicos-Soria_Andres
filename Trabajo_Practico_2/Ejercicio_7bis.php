<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°7
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°7
    </h4>
    <?php
      echo "Tabla: ";
      foreach ($_POST as $valor1){
          echo "<tr> $valor1 </tr>";
        }
      echo "<br><br>";
      echo "El valor máximo es: ";
      echo max($_POST);
      echo "<br><br>";
      echo "El valor mínimo es: ";
      echo min($_POST);
      echo "<br><br>";

      $contador = 0;
      $suma = 0;
      foreach ($_POST as $valor2){
        $suma = $suma + $valor2;
        $contador++;
      }
      $promedio = $suma/$contador;
      echo "El promedio es: $promedio";
      ?>
  </body>
</html>

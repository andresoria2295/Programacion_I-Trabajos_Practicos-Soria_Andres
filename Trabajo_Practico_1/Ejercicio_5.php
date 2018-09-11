<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°5
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°5
    </h4>
    <?php
      $arreglo_1 = array();
      $elem_aleat = rand(5,15);
      for ($i=0; $i < $elem_aleat; $i++) {
        $num_aleatorio = rand(1,100);
        array_push($arreglo_1,$num_aleatorio);
      }

      echo "a) Cantidad de elementos que tiene el arreglo: ";
      echo "<br><br>";
      $cantidad = count($arreglo_1);
      echo "El arreglo tiene $cantidad elementos.";
      echo "<br><br>";

      echo "b) Elementos del arreglo: ";
      echo "<br>";
      echo "<pre>";
      print_r($arreglo_1);
      echo "</pre>";
      echo "Opcional: ";
      for ($i=0; $i < count($arreglo_1); $i++) {
        echo "$arreglo_1[$i]\n";
      }
      echo "<br><br>";

      echo "c) Máximo y Mínimo: ";
      echo "<br><br>";
      $maximo = max($arreglo_1);
      $minimo = min($arreglo_1);
      echo "El valor máximo hallado dentro del arreglo es: $maximo";
      echo "<br>";
      echo "El valor mínimo hallado dentro del arreglo es: $minimo";
      echo "<br><br>";

      echo "d) Cálculo de promedio: ";
      echo "<br><br>";
      $suma = array_sum($arreglo_1);
      $promedio = round(($suma/$cantidad),2);
      echo "El valor promedio de los elementos del arreglo es: $promedio";
      echo "<br><br>";

      echo "e) Verificación de valor 20 dentro del arreglo: ";
      echo "<br><br>";
      for ($i=0; $i < $cantidad; $i++) {   //for ($i=0; $i < elem_aleat; $i++) {
        if ($arreglo_1[$i] == 20) {
          echo "El número 20 se encuentra dentro del arreglo.";
        }
      }
      echo "<br><br>";
     ?>
  </body>
</html>

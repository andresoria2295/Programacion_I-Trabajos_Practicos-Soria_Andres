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
    $arreglo_1 = array();
    $valor = 0;

    do {
      $num_aleatorio = rand(1,30);
      array_push($arreglo_1,$num_aleatorio);
      $cantidad = count($arreglo_1);
      if ($cantidad >= 10) {
        for ($i=0; $i < $cantidad; $i++) {
          if ($arreglo_1[$i] == 30) {
            $valor++;
          }
        }
      }
    } while ($valor == 0);

    echo "Arreglo Saliente: ";
    echo "<br><br>";
    echo "<pr>";
    print_r($arreglo_1);
    echo "</pr>";

    asort($arreglo_1);
    echo "<br><br>";
    echo "a) Arreglo Ordenado: ";
    echo "<br><br>";
    echo "<pr>";
    print_r($arreglo_1);
    echo "</pr>";

    echo "<br><br>";
    echo "b) Arreglo dividido a la mitad: ";
    echo "<br><br>";
    echo "<pr>";
    print_r(array_chunk($arreglo_1,($cantidad/2),TRUE));
    echo "</pr>";
    echo "<br>";
     ?>
  </body>
</html>

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
    <?php
      $arreglo_1 = array();
      $max_num = 15;

      for ($i=0; $i < $max_num; $i++) {
        $num_aleatorio = rand(1,50);
        array_push($arreglo_1,$num_aleatorio);
      }

      echo "a) Arreglo de 15 números aleatorios de 1-50:";
      echo "<br><br>";
      echo "<pre>";
      print_r($arreglo_1);
      echo "</pre>";
      echo "Opcional: ";
      for ($i=0; $i<count($arreglo_1); $i++) {
        echo "$arreglo_1[$i]\n";
      }

      $arreglo_2 = array_unique($arreglo_1);
        echo "<pre>";
        print_r($arreglo_2);
        echo "</pre>";
        echo "<br>";
     ?>
  </body>
</html>

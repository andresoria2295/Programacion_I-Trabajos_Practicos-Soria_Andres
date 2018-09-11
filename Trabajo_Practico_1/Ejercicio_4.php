<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°4
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°4
    </h4>
    <?php
    $string ="1,2,3,4,5,6";
    echo "a) Conversión de string a arreglo:";
    echo "<br>";
    $arreglo=str_split($string);
    echo "<pre>";
    print_r($arreglo);
    echo "</pre>";

    echo "<br>";
    echo "b) Conversión de arreglo a string:";
    echo "<br>";
    $array = array(2,4,6,8,10);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    $cadena = implode(", ", $array);
    echo "Valor de string: $cadena";
     ?>
  </body>
</html>

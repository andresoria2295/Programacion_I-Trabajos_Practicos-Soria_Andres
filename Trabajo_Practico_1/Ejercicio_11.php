<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/Ejercicio_11.css">
    <title>
      Ejercicio N°11
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°11
    </h4>
    <table id="table">
      <?php
        echo "a) Arreglo de 2 dimensiones: ";
        echo "<br><br>";
        $string = "1,2,3,4;5,6,7,8;9,10,11,12;13,14,15,16;17,18,19,20;21,22,23,24;25,26,27,28";
        $arreglo_2 = array();

        foreach (explode(';',$string) as $arreglo_1){
          $arreglo_2[] = explode(',',$arreglo_1);
        }

        $fila = count($arreglo_2);
        $columna = (count($arreglo_2, COUNT_RECURSIVE)-$fila);
        $div = $columna/$fila;
        for ($f=0; $f < $fila ; $f++) {
          if($f % 2 == 0){
            echo "<tr class = color_1>";
          }else {
            echo "<tr class = color_2>";
          }
          for ($c=0; $c < $div; $c++) {
            echo "<td>";
            echo $arreglo_2[$f][$c];
            echo "</td>";
          }
          echo "</tr>";
        }
       ?>
    </table>
  </body>
</html>

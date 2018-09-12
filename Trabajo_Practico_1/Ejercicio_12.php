<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°12
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°12
    </h4>
    <?php
    $i = rand(1,4);
    echo "Arreglo de dimension: $i";
    echo "<br><br>";

    switch ($i) {
      case 1:
          echo "Arreglo de una dimension: \n";
          $arr_vect_1d[0]="Canada";
          $arr_vect_1d[1]="Estados Unidos";
          $arr_vect_1d[2]="Brasil";
          $arr_vect_1d[3]="Argentina";
          $arr_vect_1d[4]="Portugal";
          $arr_vect_1d[5]="España";

          function mostrar_1d($arr_vect_1d){
          echo "<pre>";
          print_r($arr_vect_1d);
          echo "</pre>";
          }

          mostrar_1d($arr_vect_1d);
          echo "<br><br>";
          break;

      case 2:
          echo "Arreglo de dos dimensiones: \n";
          $arr_vect_2d[0]['Canada']="Ottawa";
          $arr_vect_2d[0]['Estados Unidos']="Nueva York";
          $arr_vect_2d[0]['Brasil']="Brasilia";
          $arr_vect_2d[0]['Argentina']="Buenos Aires";
          $arr_vect_2d[0]['Portugal']="Lisboa";
          $arr_vect_2d[0]['España']="Madrid";
          $arr_vect_2d[1]['Canada']="Toronto";
          $arr_vect_2d[1]['Estados Unidos']="Los Angeles";
          $arr_vect_2d[1]['Brasil']="Rio de Janeiro";
          $arr_vect_2d[1]['Argentina']="Mendoza";
          $arr_vect_2d[1]['Portugal']="Benfica";
          $arr_vect_2d[1]['España']="Barcelona";

          function mostrar_2d($arr_vect_2d){
          echo "<pre>";
          print_r($arr_vect_2d);
          echo "</pre>";
          }

          mostrar_2d($arr_vect_2d);
          echo "<br><br>";
          break;

      case 3:
          echo "Arreglo de tres dimensiones: \n";
          $arr_vect_3d = array(
            array(
              array("Canada","Estados Unidos"),
              array("Ottawa","Nueva York")
            ),
            array(
              array("Brasil","Argentina"),
              array("Brasilia","Buenos Aires")
            ),
            array(
              array("Portugal","España"),
              array("Lisboa","Madrid")
            )
          );

          function mostrar_3d($arr_vect_3d){
          echo "<pre>";
          print_r($arr_vect_3d);
          echo "</pre>";
          }

          mostrar_3d($arr_vect_3d);
          echo "<br><br>";
          break;

      case 4:
          echo "Arreglo de cuatro dimensiones: \n";
          $arr_vect_4d = array(
            array(
              array(
                array("Canada","Estados Unidos"),
                array("Ottawa","Nueva York")
              ),
              array(
                array("Brasil","Argentina"),
                array("Brasilia","Buenos Aires")
              )
            ),
            array(
              array(
                array("Portugal","España"),
                array("Lisboa","Madrid")
              ),
              array(
                array("Alemania","Inglaterra"),
                array("Berlín","Londres")
              )
            )
          );

          function mostrar_4d($arr_vect_4d){
          echo "<pre>";
          print_r($arr_vect_4d);
          echo "</pre>";
          }

          mostrar_4d($arr_vect_4d);
          echo "<br><br>";
          break;
  }
     ?>
  </body>
</html>

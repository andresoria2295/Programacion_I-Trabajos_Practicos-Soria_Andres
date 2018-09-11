<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°2
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°2
    </h4>
    <?php
    echo "a)Arreglos vectoriales simples: \n";
    $arr_vect_simple_1[0]=3;
    $arr_vect_simple_1[1]=4;
    $arr_vect_simple_1[2]="nos vemos";
    $arr_vect_simple_1[3]="cuidate";
    $arr_vect_simple_2 = [3,4,"nos vemos", "cuidate"];
    $arr_vect_simple_3 = array(3,4,"nos vemos", "cuidate");
    $arr_vect_simple_4[0]=8;
    $arr_vect_simple_4[]=9;
    $arr_vect_simple_4[]=10;
    $arr_vect_simple_4[19]=14;
    $arr_vect_simple_4[]="estas?";
    $arr_vect_simple_5 = [0 => 8,1 => 9,2 => 10,19 => 14,20 => "estas?"];
    $arr_vect_simple_6 = [0 => 8, 9, 10, 19 => 14, "estas?"];
    echo "<pre>";
    echo "Arreglo 1 \n";
    print_r($arr_vect_simple_1);
    echo "Arreglo 2 \n";
    print_r($arr_vect_simple_2);
    echo "Arreglo 3 \n";
    print_r($arr_vect_simple_3);
    echo "Arreglo 4 \n";
    print_r($arr_vect_simple_4);
    echo "Arreglo 5 \n";
    print_r($arr_vect_simple_5);
    echo "Arreglo 6 \n";
    print_r($arr_vect_simple_6);
    echo "</pre>";

    echo "<br><br>";
    echo "b)Arreglo asociativo simple: \n";
    $arr_asoc_simple['id']="usuario";
    $arr_asoc_simple['password']="contraseña";
    $arr_asoc_simple['address']="direccion";
    $arr_asoc_simple['telephone']="telefono";
    $arr_asoc_simple['email']="email";
    echo "<pre>";
    print_r($arr_asoc_simple);
    echo "</pre>";

    echo "<br><br>";
    echo "c)Arreglo vectorial de tres dimensiones: \n";
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
    echo "<pre>";
    print_r($arr_vect_3d);
    echo "</pre>";

    echo "<br><br>";
    $arr_vect_3d[0][0]['Canada']="Ottawa";
    $arr_vect_3d[0][0]['Estados Unidos']="Nueva York";
    $arr_vect_3d[0][0]['Brasil']="Brasilia";
    $arr_vect_3d[0][0]['Argentina']="Buenos Aires";
    $arr_vect_3d[0][0]['Portugal']="Lisboa";
    $arr_vect_3d[0][0]['España']="Madrid";
    echo "<pre>";
    print_r($arr_vect_3d);
    echo "</pre>";

    echo "<br><br>";
    echo "d)Arreglo asociativo de dos dimensiones: \n";
    $arr_vect_2d['Canada'][0]="Ottawa";
    $arr_vect_2d['Estados Unidos'][0]="Nueva York";
    $arr_vect_2d['Brasil'][0]="Brasilia";
    $arr_vect_2d['Argentina'][0]="Buenos Aires";
    $arr_vect_2d['Portugal'][0]="Lisboa";
    $arr_vect_2d['España'][0]="Madrid";
    $arr_vect_2d['Canada'][1]="Toronto";
    $arr_vect_2d['Estados Unidos'][1]="Los Angeles";
    $arr_vect_2d['Brasil'][1]="Rio de Janeiro";
    $arr_vect_2d['Argentina'][1]="Mendoza";
    $arr_vect_2d['Portugal'][1]="Benfica";
    $arr_vect_2d['España'][1]="Barcelona";
    echo "<pre>";
    print_r($arr_vect_2d);
    echo "</pre>";

    echo "<br><br>";
    $arr_vect_2d = array(
      "Canada" => array("Ottawa","Toronto"),
      "Estados Unidos" => array("Nueva York","Los Angeles"),
      "Brasil" => array("Brasilia","Rio de Janeiro"),
      "Argentina" => array("Buenos Aires","Mendoza"),
      "Portugal" => array("Lisboa","Benfica"),
      "España" => array("Madrid","Barcelona")
    );
    echo "<pre>";
    print_r($arr_vect_2d);
    echo "</pre>";
     ?>
  </body>
</html>

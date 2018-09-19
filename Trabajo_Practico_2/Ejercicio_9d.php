<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°9
    </title>
  </head>
  <body>
    <h4>Ejercicio N°9</h4>
    <h4>Muestra de Datos</h4>
    <?php
    $var1 = $_GET['dato1'];
    $var2 = $_GET['dato2'];
    $var3 = $_GET['dato3'];

    echo "Dato 1: $var1";
    echo "<br><br>";
    echo "Dato 2: $var2";
    echo "<br><br>";
    echo "Dato 3: $var3";
    echo "<br><br>";
    echo "Dato 4: ".$_GET['dato4']." ";
    echo "<br><br>";
    echo "Dato 5: ".$_GET['dato5']." ";
    echo "<br><br>";
    echo "Dato 6: ".$_GET['dato6']." ";
    echo "<br><br>";
    echo "Dato 7: ".$_GET['dato7']." ";
    echo "<br><br>";
    echo "Dato 8: ".$_GET['dato8']." ";
    echo "<br><br>";
    echo "Dato 9: ".$_GET['dato9']." ";
    echo "<br><br>";
    ?>
  </body>
</html>

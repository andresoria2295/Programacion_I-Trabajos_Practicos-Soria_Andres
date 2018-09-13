<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°5
    </title>
  </head>
  <body>
    <h4>Recepcion de Datos</h4>
    <?php
      echo "Textbox 1: {$_GET['texto1']} <br><br>";
      echo "Textbox 2: {$_GET['texto2']} <br><br>";
      echo "Clave: {$_GET['password']} <br><br>";
      echo "Checkbox 1: {$_GET['check1']} <br><br>";
      echo "Checkbox 2: {$_GET['check2']} <br><br>";
      echo "Checkbox 3: {$_GET['check3']} <br><br>";
      echo "Lista desplegable: {$_GET['lista']} <br><br>";
     ?>
  </body>
</html>

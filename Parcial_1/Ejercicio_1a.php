<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°1
    </title>
  </head>
  <body>
    <h4>Ejercicio N°1</h4>
    <?php
      $valor_num = $_POST['valor_num'];
     ?>
     <form action="Ejercicio_1b.php" method="POST">
    <?php
      if ($valor_num >= 5) {
        echo "El valor numérico ingresado es mayor o igual a 5";
        echo "<br><br>";
        echo "A continuación se generará $valor_num controles de tipo texto:";
        echo "<br><br>";
      for ($i=1; $i <= $valor_num; $i++) {
        echo "<label for=\"dato$i\">Dato numérico $i: </label>";
        echo "<input type=\"text\" id=\"dato$i\" name=\"dato$i\"><br>";
      }
    }else {
      echo "El valor numérico ingresado es menor a 5";
      echo "<br><br>";
      echo "A continuación se generará 5 controles (de texto): ";
      echo "<br><br>";
      for ($i=1; $i <= 5; $i++) {
        echo "<label for=\"dato$i\">Dato numérico $i: </label>";
        echo "<input type=\"text\" id=\"dato$i\" name=\"dato$i\"><br>";
      }
    }
     ?>
     <br><br>
     <input type="submit" value="Enviar datos">
   </form>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°7
    </title>
  </head>
  <body>
    <h4>Ejercicio N°7</h4>
    <?php
      $valor_num = $_POST['valor_num'];
     ?>
     <form action="Ejercicio_7bis.php" method="POST">
    <?php
      for ($i=1; $i <= $valor_num; $i++) {
        echo "<label for=\"dato$i\">Dato numérico $i: </label>";
        echo "<input type=\"text\" id=\"dato$i\" name=\"dato$i\"><br>";
      }
     ?>
     <br><br>
     <input type="submit" value="Enviar datos">
   </form>
  </body>
</html>

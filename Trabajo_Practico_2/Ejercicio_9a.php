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
    <h4>Nueva Recolección de Datos</h4>
    <form action="Ejercicio_9b.php" method="POST">
      <?php
      $var1 = $_POST['text1'];
      $var2 = $_POST['text2'];
      $var3 = $_POST['text3'];

      echo "<input type=\"hidden\" name=\"oculto1\" value=\"$var1\">";
      echo "<input type=\"hidden\" name=\"oculto2\" value=\"$var2\">";
      echo "<input type=\"hidden\" name=\"oculto3\" value=\"$var3\">";

      echo "<label for=\"dato4\">Dato 4: </label>";
      echo "<input type=\"text\" name=\"text4\"><br><br>";
      echo "<label for=\"dato5\">Dato 5: </label>";
      echo "<input type=\"text\" name=\"text5\"><br><br>";
      echo "<label for=\"dato6\">Dato 6: </label>";
      echo "<input type=\"text\" name=\"text6\"><br><br>";
      echo "<input type=\"submit\" name=\"Enviar datos\"><br><br>";
      ?>
    </form>
  </body>
</html>

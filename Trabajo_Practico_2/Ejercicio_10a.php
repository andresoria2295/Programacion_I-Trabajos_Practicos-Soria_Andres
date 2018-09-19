<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°10
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°10
    </h4>
    <?php
      $num = $_POST['valor_num'];
    ?>
    <form action="Ejercicio_10b.php" method="POST">
    <?php
      for ($i=1; $i <= $num; $i++) {
        echo "Producto $i: <input type=\"text\" name=\"prod\">";
        echo "<input type=\"checkbox\" name=\"check$i\"><br><br>";
      }
      echo "<input type=\"hidden\" name=\"cantidad\" value=\"$num\">";
      echo "<input type=\"submit\" name=\"Enviar datos\">";
     ?>
   </form>
  </body>
</html>

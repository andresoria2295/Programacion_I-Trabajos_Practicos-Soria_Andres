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
      <form action="Ejercicio_9d.php" method="POST">
        <?php
          $var1 = $_POST['oculto4'];
          $var2 = $_POST['oculto5'];
          $var3 = $_POST['oculto6'];
          $var4 = $_POST['oculto7'];
          $var5 = $_POST['oculto8'];
          $var6 = $_POST['oculto9'];

          echo "Dato 1: $var1";
          echo "<br><br>";
          echo "Dato 2: $var2";
          echo "<br><br>";
          echo "Dato 3: $var3";
          echo "<br><br>";
          echo "Dato 4: $var4";
          echo "<br><br>";
          echo "Dato 5: $var5";
          echo "<br><br>";
          echo "Dato 6: $var6";
          echo "<br><br>";
          echo "Dato 7: ".$_POST['text7']." ";
          echo "<br><br>";
          echo "Dato 8: ".$_POST['text8']." ";
          echo "<br><br>";
          echo "Dato 9: ".$_POST['text9']." ";
          echo "<br><br>";

          echo "<a href = Ejercicio_9d.php?dato1=$var1&dato2=$var2&dato3=$var3&dato4=".$_POST['oculto7']."&dato5=".$_POST['oculto8']."&dato6=".$_POST['oculto9']."&dato7=".$_POST['text7']."&dato8=".$_POST['text8']."&dato9=".$_POST['text9']."&>Enviar datos</a>";
         ?>
      </form>
  </body>
</html>

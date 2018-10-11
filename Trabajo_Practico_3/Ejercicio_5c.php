<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>
       Ejercicio N°5
     </title>
   </head>
   <body>
     <h4>Ejercicio N°5</h4>
     <?php
       session_start();

       $_SESSION['text_7'] = $_POST['text_7'];
       $_SESSION['text_8'] = $_POST['text_8'];
       $_SESSION['text_9'] = $_POST['text_9'];

       $var1 = $_SESSION['text_1'];
       $var2 = $_SESSION['text_2'];
       $var3 = $_SESSION['text_3'];
       $var4 = $_SESSION['text_4'];
       $var5 = $_SESSION['text_5'];
       $var6 = $_SESSION['text_6'];
       $var7 = $_SESSION['text_7'];
       $var8 = $_SESSION['text_8'];
       $var9 = $_SESSION['text_9'];

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
       echo "Dato 7: $var7";
       echo "<br><br>";
       echo "Dato 8: $var8";
       echo "<br><br>";
       echo "Dato 9: $var9";
       echo "<br><br>";
      ?>
     <a href="Ejercicio_5d.php">Link</a>
   </body>
 </html>

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

       $_SESSION['text_4'] = $_POST['text_4'];
       $_SESSION['text_5'] = $_POST['text_5'];
       $_SESSION['text_6'] = $_POST['text_6'];
      ?>

     <form action="Ejercicio_5c.php" method="POST">
        <label for="text_7">Dato 7: </label>
        <input type="text" name="text_7">
        <br><br>
        <label for="text_8">Dato 8: </label>
        <input type="text" name="text_8">
        <br><br>
        <label for="text_9">Dato 9: </label>
        <input type="text" name="text_9">
        <br><br>
        <input type="submit" name="datos" value="Enviar datos">
     </form>
   </body>
 </html>

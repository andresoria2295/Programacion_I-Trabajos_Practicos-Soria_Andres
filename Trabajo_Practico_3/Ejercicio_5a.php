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

       $_SESSION['text_1'] = $_POST['text_1'];
       $_SESSION['text_2'] = $_POST['text_2'];
       $_SESSION['text_3'] = $_POST['text_3'];
      ?>

     <form action="Ejercicio_5b.php" method="POST">
        <label for="text_4">Dato 4: </label>
        <input type="text" name="text_4">
        <br><br>
        <label for="text_5">Dato 5: </label>
        <input type="text" name="text_5">
        <br><br>
        <label for="text_6">Dato 6: </label>
        <input type="text" name="text_6">
        <br><br>
        <input type="submit" name="datos" value="Enviar datos">
     </form>
   </body>
 </html>

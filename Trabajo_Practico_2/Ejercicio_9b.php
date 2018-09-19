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
    <form action="Ejercicio_9c.php" method="POST">

      <input type="hidden" name="oculto4" value="<?php echo $_POST['oculto1']?>">
      <input type="hidden" name="oculto5" value="<?php echo $_POST['oculto2']?>">
      <input type="hidden" name="oculto6" value="<?php echo $_POST['oculto3'] ?>">
      <input type="hidden" name="oculto7" value="<?php echo $_POST['text4'] ?>">
      <input type="hidden" name="oculto8" value="<?php echo $_POST['text5'] ?>">
      <input type="hidden" name="oculto9" value="<?php echo $_POST['text6'] ?>">

      <label for="dato7">Dato 7:</label>
      <input type="text" name="text7">
      <br><br>
      <label for="dato8">Dato 8:</label>
      <input type="text" name="text8">
      <br><br>
      <label for="dato9">Dato 9:</label>
      <input type="text" name="text9">
      <br><br>
      <input type="submit" name="Enviar datos">
      <br><br>
    </form>
  </body>
</html>

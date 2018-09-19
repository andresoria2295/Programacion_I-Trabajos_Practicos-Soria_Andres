<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°11
    </title>
  </head>
  <body>
    <h4>Ejercicio N°11</h4>
    <h4>Resultado</h4>
    <?php
      $valor1 = $_POST['valor1'];
      $valor2 = $_POST['valor2'];
     ?>
     <label for="lista">Lista: </label>
     <select name="lista">
      <?php
       for ($i=1; $i <= $valor1; $i++) {
         if ($valor2 == $i) {
           echo "<option selected=\"selected\" value=\"$i\">Opción a seleccionar Nro $i</option>";
         }else {
           echo "<option value=\"$i\">Opción a seleccionar Nro $i</option>";
         }
       }
      ?>
    </select>
  </body>
</html>

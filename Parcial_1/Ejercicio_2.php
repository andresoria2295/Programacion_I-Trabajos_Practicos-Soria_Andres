<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°2
    </title>
  </head>
  <body>
    <h4>Ejercicio N°2</h4>
    <form action="Ejercicio_2a.php" method="post">

      <?php echo "Formato de fecha a utilizar (solo válida una opción): "; ?>
      <br><br>

      Formato Largo:
      <input type="checkbox" name="formato_largo" value="1">
      <br><br>
      Formato Corto:
      <input type="checkbox" name="formato_corto" value="2">
      <br><br>

      <?php echo "Día: "; ?>
      <select name="lista1">

        <?php
        for($i=1;$i<32;$i++){
          $dia=date("j");
          if($dia==$i){
            echo "<option selected=\"selected\" value=\"$i\">$i</option>";
          }else{
            echo "<option value=\"$i\">$i</option>";
          }
        }
        ?>

      </select>
      <?php echo "Mes: "; ?>
      <select name="lista2">
        <?php
        for($i=1;$i<=12;$i++){
          $month=date("F",mktime(0,0,0,$i,1));
          $mes=date("F");
          if($mes==$month){
            echo "<option selected=\"selected\" value=\"$mes\">$mes</option>";
          }else{
            echo "<option value=\"$i\">$month</option>";
          }
        }
        ?>

      </select>

<?php echo "Año: "; ?>

      <select name="lista3">

        <?php
        for($i=1900;$i<2101;$i++){
          $año=date("Y");
          if($i==$año){
            echo "<option selected=\"selected\" value=\"$i\">$año</option>";
          }else{
            echo "<option value=\"$i\">$i</option>";
          }
        }
        ?>

      </select>
      <br><br>
      <input type="submit" name="datos" value="Enviar Datos">

    </form>
  </body>
</html>

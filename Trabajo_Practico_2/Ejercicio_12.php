<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°12
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°12
    </h4>
    <form action="Ejercicio_12a.php" method="POST">
      Día:
      <select name="day">
        <?php
          for ($i=1; $i <= 31 ; $i++) {
            $dia = date("d");
            if ($dia == $i) {
              echo "<option selected=\"selected\" value=\"$i\">$i</option>";
            }else{
              echo "<option value=\"$i\">$i</option>";
            }
          }
         ?>
      </select>

      Mes:
      <select name="month">
        <?php
          for ($i=1; $i <= 12; $i++) {
            $mth = date("F", mktime(0,0,0,$i,1));
            $mes = date("F");
            if($mes == $mth){
              echo "<option selected=\"selected\" value=\"$mes\">$mes</option>";
            }else{
              echo "<option value=\"$i\">$mth</option>";
            }
          }
         ?>
      </select>

      Año:
      <select name="year">
        <?php
          for ($i=1900; $i <= 2100 ; $i++) {
            $año = date("Y");
            if ($año == $i) {
              echo "<option selected=\"selected\" value=\"$i\">$i</option>";
            }else{
              echo "<option value=\"$i\">$i</option>";
            }
          }
         ?>
      </select>
      <br><br>
      <input type="submit" value="Enviar datos">
    </form>
  </body>
</html>

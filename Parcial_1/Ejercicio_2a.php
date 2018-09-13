<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Ejercicio N°2</h4>
    <?php
    if ($_POST['formato_largo'] == 1) {
      $d=$_POST['lista1'];
      $m=$_POST['lista2'];
      $y=$_POST['lista3'];
      echo "<br>";
      echo "Hoy es el $d de $m de $y";
      ?>
      <form action="index.html" method="post">
        <br><br>
        <select name="day">
          <?php
              echo "<option value=\"$d\">$d</option>";
          ?>
        </select>
        <select name="month">
          <?php
            switch ($m) {
              case 1:
                echo "Enero";
                break;
              case 2:
                echo "Febrero";
                break;
              case 3:
                echo "Marzo";
                break;
              case 4:
                echo "Abril";
                break;
              case 5:
                echo "Mayo";
                break;
              case 6:
                echo "Junio";
                break;
              case 7:
                echo "Julio";
                break;
              case 8:
                echo "Agosto";
                break;
              case 9:
                echo "Setiembre";
                break;
              case 10:
                echo "Octubre";
                break;
              case 11:
                echo "Noviembre";
                break;
              case 12:
                echo "Diciembre";
                break;
            }
          ?>
        </select>
        <select name="year">
          <?php
              echo "<option value=\"$y\">$y</option>";
          ?>
        </select>
      </form>
    <?php
    }else if ($_POST['formato_corto'] == 2) {
      $d=$_POST['lista1'];
      $m=$_POST['lista2'];
      $y=$_POST['lista3'];
      echo "<br>";
      echo "Hoy es el $d / $m / $y";
     ?>
     </form>
     <form action="index.html" method="post">
       <br><br>
       <select name="day">
         <?php
             echo "<option value=\"$d\">$d</option>";
         ?>
       </select>
       <select name="">
         <?php
             echo "<option value=\"$m\">$m</option>";
         ?>
       </select>
       <select name="year">
         <?php
             echo "<option value=\"$y\">$y</option>";
         ?>
       </select>
     </form>
     <?php
      }
      ?>
  </body>
</html>

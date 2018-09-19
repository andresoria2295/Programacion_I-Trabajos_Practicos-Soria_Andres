<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°8
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°8
    </h4>
    <h4>Formulario</h4>
    <br>
    <?php
    $var1 = $_GET['texto1'];
    $var2 = $_GET['texto2'];
    $var3 = $_GET['oculto'];
    $var4 = $_GET['clave'];
    $var5 = $_GET['check1'];
    $var6 = $_GET['check2'];
    $var7 = $_GET['check3'];
    $var8 = $_GET['grupo1'];
    $var9 = $_GET['grupo2'];
    $option =$_GET['lista'];
     ?>

    <form action="Ejercicio_8b.php" method="GET">
      Texto 1:
      <?php
        echo "<input type=\"text\" name=\"texto1\" value=\"$var1\"><br><br>";
       ?>
      Texto 2:
      <?php
        echo "<input type=\"text\" name=\"texto2\" value=\"$var2\"><br><br>";
       ?>
      Oculto:
      <?php
      echo "<input type=\"hidden\" name=\"oculto\" value=\"$var3\"><br><br>";
      ?>
      Clave:
      <?php
        echo "<input type=\"password\" name=\"clave\" value=\"$var4\"><br><br>";
       ?>
      Check 1:
      <?php
        if ($var5 == 1){
          echo "<input type=\"checkbox\" name=\"check1\" checked><br><br>";
        }else{
          echo "<input type=\"checkbox\" name=\"check1\"><br><br>";
        }
       ?>
      Check 2:
      <?php
        if ($var6 == 2){
          echo "<input type=\"checkbox\" name=\"check2\" checked><br><br>";
        }else{
          echo "<input type=\"checkbox\" name=\"check2\"><br><br>";
        }
       ?>
      Check 3:
      <?php
        if ($var7 == 3){
          echo "<input type=\"checkbox\" name=\"check3\" checked><br><br>";
        }else{
          echo "<input type=\"checkbox\" name=\"check3\"><br><br>";
        }
       ?>
       Grupo 1:
       <?php
          if($var8 == 1){
            echo "<input type=\"radio\" name=\"grupo1\" value=\"1\" checked>";
            echo "<input type=\"radio\" name=\"grupo1\" value=\"2\" >";
            echo "<input type=\"radio\"  name=\"grupo1\" value=\"3\">";
          }
          else if($var8 == 2){
            echo "<input type=\"radio\" name=\"grupo1\" value=\"1\">";
            echo "<input type=\"radio\" name=\"grupo1\" value=\"2\" checked>";
            echo "<input type=\"radio\" name=\"grupo1\" value=\"3\">";
          }
          else if($var8 == 3){
            echo "<input type=\"radio\" name=\"grupo1\" value=\"1\">";
            echo "<input type=\"radio\" name=\"grupo1\" value=\"2\">";
            echo "<input type=\"radio\" name=\"grupo1\" value=\"3\" checked><br><br>";
          }
          else{
            echo "<input type=\"radio\" name=\"grupo1\" value=\"1\">";
            echo "<input type=\"radio\" name=\"grupo1\" value=\"2\">";
            echo "<input type=\"radio\" name=\"grupo1\" value=\"3\"><br><br>";
        }
        ?>
        Grupo 2:
        <?php
          if($var9 == 4){
            echo "<input type=\"radio\" name=\"grupo2\" value=\"4\" checked>";
            echo "<input type=\"radio\" name=\"grupo2\" value=\"5\" >";
            echo "<input type=\"radio\" name=\"grupo2\" value=\"6\">";
          }
          else if($var9 == 5){
            echo "<input type=\"radio\" name=\"grupo2\" value=\"4\">";
            echo "<input type=\"radio\" name=\"grupo2\" value=\"5\" checked>";
            echo "<input type=\"radio\" name=\"grupo2\" value=\"6\">";
          }
          else if($var9 == 6){
            echo "<input type=\"radio\" name=\"grupo2\" value=\"4\">";
            echo "<input type=\"radio\" name=\"grupo2\" value=\"5\">";
            echo "<input type=\"radio\" name=\"grupo2\" value=\"6\" checked><br><br>";
          }
          else{
            echo "<input type=\"radio\" name=\"grupo2\" value=\"4\">";
            echo "<input type=\"radio\" name=\"grupo2\" value=\"5\">";
            echo "<input type=\"radio\" name=\"grupo2\" value=\"6\"><br><br>";
        }
        ?>
        Lista:
        <select name="lista">
        <?php
        if($option == 1){
        echo "<option selected=\"selected\" value=\"1\">Primer Valor</option>";
        echo "<option value=\"2\">Segundo Valor</option>";
        echo "<option value=\"3\">Tercer Valor</option>";
        echo "<option value=\"4\">Cuarto Valor</option>";
      }else if($option == 2){
          echo "<option value=\"1\">Primer Valor</option>";
          echo "<option selected=\"selected\" value=\"2\">Segundo Valor</option>";
          echo "<option value=\"3\">Tercer Valor</option>";
          echo "<option value=\"4\">Cuarto Valor</option>";
        }else if($option == 3){
          echo "<option value=\"1\">Primer Valor</option>";
          echo "<option value=\"2\">Segundo Valor</option>";
          echo "<option selected=\"selected\" value=\"3\">Tercer Valor</option>";
          echo "<option value=\"4\">Cuarto Valor</option>";
        }else if($option == 4){
          echo "<option value=\"1\">Primer Valor</option>";
          echo "<option value=\"2\">Segundo Valor</option>";
          echo "<option value=\"3\">Tercer Valor</option>";
          echo "<option selected=\"selected\" value=\"4\">Cuarto Valor</option>";
        }
        ?>
        </select>
    </form>
  </body>
</html>

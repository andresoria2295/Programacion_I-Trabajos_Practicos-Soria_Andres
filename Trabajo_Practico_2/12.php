<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Ej_12.php" method="post">
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
    </form>
  </body>
  </html>

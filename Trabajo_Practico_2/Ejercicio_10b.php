<?php
  $suma = 0;
  echo "<br>";
  for ($i=1; $i <= $_POST['cantidad']; $i++) {
    if ($_POST["check$i"] == on) {
      echo "Se ha seleccionado el producto $i";
      echo "<br><br>";
      $suma = $suma + 1;
    }
  }
  echo "La cantidad de productos seleccionados es de: $suma";
  echo "<br><br>";
 ?>

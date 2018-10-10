<?php
  echo "<br>";
  echo "<pre>";
  echo "Datos del archivo: ";
  echo "<br><br>";
  print_r($_FILES);
  echo "</pre>";

  echo "<br>";
  echo "Contenido del archivo: ";
  echo "<br><br>";

  $archivo = fopen($_FILES['archivo']['tmp_name'],"r");
    while ($linea = fgets($archivo)) {
      echo "$linea";
    }
 ?>

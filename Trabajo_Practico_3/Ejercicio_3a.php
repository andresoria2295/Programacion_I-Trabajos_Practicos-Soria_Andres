<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°3
    </title>
  </head>
  <body>
    <?php
      $archivo_1 = $_FILES['archivo']['tmp_name'];
      $archivo_2 = "Importados_3/" . $_FILES['archivo']['name'];
      echo "<br>";
      if(!copy($archivo_1, $archivo_2)){
        echo "Se ha producido un error.";
        echo "<br>";
      }else {
        echo "Archivo copiado en carpeta Importados.";
        echo "<br>";
      }
     ?>
  </body>
</html>

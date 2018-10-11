<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°4
    </title>
  </head>
  <body>
    <?php
      $archivo_1 = $_FILES['archivo']['tmp_name'];
      $archivo_2 = "Importados_4/" . $_FILES['archivo']['name'];
      echo "<br>";
      if(!copy($archivo_1, $archivo_2)){
        echo "Se ha producido un error.";
        echo "<br><br>";
      }else {
        echo "Archivo copiado en carpeta Importados.";
        echo "<br><br>";
      }

      $imagenes = scandir("Importados_4/",1);
      $cantidad = count($imagenes);
     ?>

     <table>
      <?php
        for ($i=0; $i < $cantidad - 2; $i++) {
          echo "<tr>";
          echo "<img src=\""."Importados_4/".$imagenes[$i]."\" height=\"200\" width=\"200\">";
          echo "<tr>";
        }
       ?>
     </table>
  </body>
</html>

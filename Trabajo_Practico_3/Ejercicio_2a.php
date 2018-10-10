<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°2
    </title>
      <!-- <link rel="stylesheet" type="text/css" href="css/Ejercicio_2.css"/> -->
  </head>
  <body>
    <table style="width:10%" border="width: 5px">
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
            list($id, $nombre, $apellido, $email, $observaciones) = explode(";", $linea);
            echo "<tr>";
            echo "<td>";
            echo "$id";
            echo "</td>";
            echo "<td>";
            echo "$nombre";
            echo "</td>";
            echo "<td>";
            echo "$apellido";
            echo "</td>";
            echo "<td>";
            echo "$email";
            echo "</td>";
            echo "<td>";
            echo "$observaciones";
            echo "</td>";
            echo "</tr>";
          }
       ?>
    </table>
  </body>
</html>

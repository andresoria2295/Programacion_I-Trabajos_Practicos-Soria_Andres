<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio N°3
    </title>
  </head>
  <body>
    <h4>
      Ejercicio N°3
    </h4>
    <?php
      $id = $_POST['text_usuario'];
      $password = $_POST['text_contraseña'];
      echo "<br>";

      $arreglo =array( '1'=>array('nombre'=>"Romero_Daniel",'contraseña'=>"2044",'mail'=>"daniel_15@gmail.com"),
               '2'=>array('nombre'=>"Olivera_Camila",'contraseña'=>"9876",'mail'=>"oliv_cam@gmail.com"),
               '3'=>array('nombre'=>"Oviedo_Francisco",'conttraseña'=>"5432",'mail'=>"fran_mza@gmail.com"),
               '4'=>array('nombre'=>"Fernandez_Agustina",'contraseña'=>"1123",'mail'=>"agus_fer@gmail.com"),
               '5'=>array('nombre'=>"Martinez_Cristian",'contraseña'=>"4567",'mail'=>"cris_18@gmail.com"),
               '6'=>array('nombre'=>"Sanchez_Rosario",'contraseña'=>"1001",'mail'=>"rosario_1995@gmail.com")
               );
              $c=0;
              foreach ($arreglo as $ingreso => $valor) {
                if ($valor['nombre'] == $id && $valor['contraseña'] == $password) {
                  echo "Validación Correcta: ";
                  echo "<br><br>";
                  echo "Usuario: ";
                  echo $valor['nombre'];
                  echo "<br><br>";
                  echo "Contraseña: ";
                  echo $valor['contraseña'];
                  echo "<br><br>";
                  echo "Mail: ";
                  echo $valor['mail'];
                  echo "<br><br>";
                  $c=1;
                   }
               }
               if ($c == 0) {
                 echo "Usuario o contraseña incorrecta";
               }

     ?>
  </body>
</html>

<?php
  if ($_GET['texto']=='Andres') {
    echo "<br>";
    echo "Segundo Link:";
    echo "<br><br>";
    echo "Texto = " .$_GET['texto'];
  }else if ($_GET['texto1'] == 'dato1') {
    echo "<br>";
    echo "Tercer Link:";
    echo "<br><br>";
    echo "Texto = " .$_GET['texto1'];
    echo "<br><br>";
    echo "Texto = ".$_GET['texto2'];
    echo "<br><br>";
    echo "Texto = ".$_GET['texto3'];
  }else {
    echo "<br>";
    echo "Primer Link:";
    echo "<br><br>";
    echo "No se han enviado los datos";
  }
 ?>

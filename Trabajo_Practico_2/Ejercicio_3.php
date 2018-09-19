<?php
  $var1 = $_GET['texto1'];
  $var2 = $_GET['texto2'];
  $var3 = $_GET['oculto'];
  $var4 = $_GET['clave'];
  $option =$_GET['lista'];

  echo "Textbox 1: $var1";
  echo "<br><br>";
  echo "Textbox 2: $var2";
  echo "<br><br>";
  echo "Hidden (oculto): $var3";
  echo "<br><br>";
  echo "Clave: $var4";
  echo "<br><br>";

  if($_GET['check1']==1){
    echo "Checkbox 1: Seleccionado";
    echo "<br><br>";
  }
  else{
    echo "Checkbox 1: No Seleccionado";
    echo "<br><br>";
  }

  if($_GET['check2']==2){
    echo "Checkbox 2: Seleccionado";
    echo "<br><br>";
  }
  else{
    echo "Checkbox 2: No Seleccionado";
    echo "<br><br>";
  }

  if($_GET['check3']==3){
    echo "Checkbox 3: Seleccionado";
    echo "<br><br>";
  }
  else{
    echo "Checkbox 3: No Seleccionado";
    echo "<br><br>";
  }

  echo "Radio Grupo 1:";
  echo "<br><br>";
  if($_GET['grupo1']==1){
    echo "Elemento 1";
    echo "<br><br>";
  }
  if($_GET['grupo1']==2){
    echo "Elemento 2";
    echo "<br><br>";
  }
  if($_GET['grupo1']==3){
    echo "Elemento 3";
    echo "<br><br>";
  }

  echo "Radio Grupo 2:";
  echo "<br><br>";
  if($_GET['grupo2']==4){
    echo "Elemento 4";
    echo "<br><br>";
  }
  if($_GET['grupo2']==5){
    echo "Elemento 5";
    echo "<br><br>";
  }
  if($_GET['grupo2']==6){
    echo "Elemento 6";
    echo "<br><br>";
  }

  echo "Lista desplegable: $option";
  echo "<br>";
 ?>

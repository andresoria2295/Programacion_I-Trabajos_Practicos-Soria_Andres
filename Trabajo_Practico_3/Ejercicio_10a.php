<?php
  session_start();

  $_SESSION['usuario'] = $_POST['usuario'];
  $_SESSION['clave'] = $_POST['clave'];

  header('location: Ejercicio_10b.php');
 ?>

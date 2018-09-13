<html>
<head>
<title>Ejercicio 9c</title>
</head>
<body>
  <form action="Ejercicio_9d.php" method="POST">

    <?php
    $var1=$_POST['oculto1'];
    $var2=$_POST['oculto2'];
    $var3=$_POST['oculto3'];
    $var4=$_POST['oculto4'];
    $var5=$_POST['oculto5'];
    $var6=$_POST['oculto6'];
    $var7=$_POST['text1'];
    $var8=$_POST['text2'];
    $var9=$_POST['text3'];
    echo "Dato 1: ".$var1;
    echo "<br>";
    echo "Dato 1: ".$var2;
    echo "<br>";
    echo "Dato 1: ".$var3;
    echo "<br>";
    echo "Dato 1: ".$var4;
    echo "<br>";
    echo "Dato 1: ".$var5;
    echo "<br>";
    echo "Dato 1: ".$var6;
    echo "<br>";
    echo "Dato 1: ".$var7;
    echo "<br>";
    echo "Dato 1: ".$var8;
    echo "<br>";
    echo "Dato 1: ".$var9;
    echo "<br>";
    echo "<a href='ejercicio9d.php?
    dato1=".$_POST['oculto1']."&"
    ."dato2=".$_POST['oculto2']."&"
    ."dato3=".$_POST['oculto3']."&"
    ."dato4=".$_POST['oculto4']."&"
    ."dato5=".$_POST['oculto5']."&"
    ."dato6=".$_POST['oculto6']."&"
    ."dato7=".$_POST['text1']."&"
    ."dato8=".$_POST['text2']."&"
    ."dato9=".$_POST['text3']."&"
    ."'>Enviar datos</a>";
    ?>

  </form>

</body>
</html>

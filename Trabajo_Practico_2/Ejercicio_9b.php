<html>
<head>
<title>Ejercicio 9c</title>
</head>
<body>
<form action="Ejercicio_9c.php" method="POST">
<input type="hidden" name="oculto1" value="<?php echo $_POST['oculto1'] ?>">
<input type="hidden" name="oculto2" value="<?php echo $_POST['oculto2'] ?>">
<input type="hidden" name="oculto3" value="<?php echo $_POST['oculto3'] ?>">
<input type="hidden" name="oculto4" value="<?php echo $_POST['text1'] ?>">
<input type="hidden" name="oculto5" value="<?php echo $_POST['text2'] ?>">
<input type="hidden" name="oculto6" value="<?php echo $_POST['text3'] ?>">


<label for="dato1">Dato 7:</label>
<input type="text" name="text1"><br>
<label for="dato2">Dato 8:</label>
<input type="text" name="text2"><br>
<label for="dato1">Dato 9:</label>
<input type="text" name="text3"><br>
<input type="submit" value="Enviar">
</form>
</body>
</html>

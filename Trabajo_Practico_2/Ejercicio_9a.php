<html>
<head>
<title>Ejercicio9</title>
</head>
<body>
<form action="Ejercicio_9b.php" method="POST">
<input type="hidden" name="oculto1" value="<?php echo $_POST['text1'] ?>">
<input type="hidden" name="oculto2" value="<?php echo $_POST['text2'] ?>">
<input type="hidden" name="oculto3" value="<?php echo $_POST['text3'] ?>">

<label for="dato1">Dato 4:</label>
<input type="text" name="text1"><br>
<label for="dato2">Dato 5:</label>
<input type="text" name="text2"><br>
<label for="dato1">Dato 6:</label>
<input type="text" name="text3"><br>
<input type="submit" value="Enviar">
</form>
</body>
</html>

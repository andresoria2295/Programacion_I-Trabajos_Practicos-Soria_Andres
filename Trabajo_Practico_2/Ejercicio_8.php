<html>
<head>
<title></title>
</head>
<body>

<?php
$var1=$_GET['texto1'];
$var2=$_GET['texto2'];
$var3=$_GET['oculto'];
$var4=$_GET['password'];
$var5=$_GET['check1'];
$var6=$_GET['check2'];
$var7=$_GET['check3'];
$var8=$_GET['grupo1'];
$var9=$_GET['grupo2'];
$var10=$_GET['lista'];
?>

	 </form>
<h2>Ejercicio 8</h2>
<form action="ejercicio8b.php" method="GET">
<label for="texto1">Texto1: </label>
<?php
echo "<input type=\"text\" name=\"texto1\" value=\"$var1\"><br>";
?>
<label for="texto2">Texto2: </label>
<?php
echo "<input type=\"text\" name=\"texto2\" value=\"$var2\"><br>";
?>
<label for="hidden">Oculto: </label>
<?php
echo "<input type=\"hidden\" name=\"oculto\" value=\"$var3\"><br>";
?>
<label for="password">Clave: </label>
<?php
echo "<input type=\"password\" name=\"password\" value=\"$var4\"><br>";
?>
<label for="checkbox1">Check1: </label>
<?php
if ($var5==1){
echo "<input type=\"checkbox\" name=\"check1\" checked><br>";
}else{
echo "<input type=\"checkbox\" name=\"check1\"><br>";}
?>
<label for="checkbox2">Check2: </label>
<?php
if($var6==2){
echo "<input type=\"checkbox\" name=\"check2\" checked><br>";
}else{
echo "<input type=\"checkbox\" name=\"check2\" ><br>";
}
?>
<label for="checkbox3">Check3: </label>
<?php
if($var7==3){
echo "<input type=\"checkbox\" name=\"check3\" checked><br>";
}else{
echo "<input type=\"checkbox\" name=\"check3\"><br>";}
?>


<label for="Grupo1">Grupo1 </label>
<?php
if($var8=="1"){
echo "<input type=\"radio\" name=\"grupo1\" value=\"1\" checked>";
echo "<input type=\"radio\" name=\"grupo1\" value=\"2\" >";
echo "<input type=\"radio\"  name=\"grupo1\" value=\"3\">";
}
elseif($var8=="2"){
echo "<input type=\"radio\" name=\"grupo1\" value=\"1\">";
echo "<input type=\"radio\" name=\"grupo1\" value=\"2\" checked>";
echo "<input type=\"radio\" name=\"grupo1\" value=\"3\">";
}
elseif($var8=="3"){
echo "<input type=\"radio\" name=\"grupo1\" value=\"1\">";
echo "<input type=\"radio\" name=\"grupo1\" value=\"2\">";
echo "<input type=\"radio\" name=\"grupo1\" value=\"3\" checked><br>";
}
else{
echo "<input type=\"radio\" name=\"grupo1\" value=\"1\">";
echo "<input type=\"radio\" name=\"grupo1\" value=\"2\">";
echo "<input type=\"radio\" name=\"grupo1\" value=\"3\"><br>";
}
?>
<label for="Grupo2">Grupo2: </label>
<?php
if($var9=="4"){
echo "<input type=\"radio\" name=\"grupo2\" value=\"4\" checked>";
echo "<input type=\"radio\" name=\"grupo2\" value=\"5\" >";
echo "<input type=\"radio\" name=\"grupo2\" value=\"6\">";
}
elseif($var9=="5"){
echo "<input type=\"radio\" name=\"grupo2\" value=\"4\">";
echo "<input type=\"radio\" name=\"grupo2\" value=\"5\" checked>";
echo "<input type=\"radio\" name=\"grupo2\" value=\"6\">";
}
elseif($var9=="6"){
echo "<input type=\"radio\" name=\"grupo2\" value=\"4\">";
echo "<input type=\"radio\" name=\"grupo2\" value=\"5\">";
echo "<input type=\"radio\" name=\"grupo2\" value=\"6\" checked><br>";
}
else{
echo "<input type=\"radio\" name=\"grupo2\" value=\"4\">";
echo "<input type=\"radio\" name=\"grupo2\" value=\"5\">";
echo "<input type=\"radio\" name=\"grupo2\" value=\"6\"><br>";
}
?>
<label for="Lista">Lista: </label>
<select name="Lista">
<?php
if($var10==1){
echo "<option selected=\"selected\" value=\"1\">Primer Valor</option>";
echo "<option value=\"2\">Segundo Valor</option>";
echo "<option value=\"3\">Tercer Valor</option>";
echo "<option value=\"4\">Cuarto Valor</option>";
}else if($var10==2){
  echo "<option value=\"1\">Primer Valor</option>";
  echo "<option selected=\"selected\" value=\"2\">Segundo Valor</option>";
  echo "<option value=\"3\">Tercer Valor</option>";
  echo "<option value=\"4\">Cuarto Valor</option>";
}else if($var10==3){
  echo "<option value=\"1\">Primer Valor</option>";
  echo "<option value=\"2\">Segundo Valor</option>";
  echo "<option selected=\"selected\" value=\"3\">Tercer Valor</option>";
  echo "<option value=\"4\">Cuarto Valor</option>";
}else if($var10==4){
  echo "<option value=\"1\">Primer Valor</option>";
  echo "<option value=\"2\">Segundo Valor</option>";
  echo "<option value=\"3\">Tercer Valor</option>";
  echo "<option selected=\"selected\" value=\"4\">Cuarto Valor</option>";
}
?>
</select>
</form>
</body>
</html>

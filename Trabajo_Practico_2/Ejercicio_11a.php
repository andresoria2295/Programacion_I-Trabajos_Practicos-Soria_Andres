<html>
<head>
<title></title>
</head>
<body>
<?php
$var1=$_GET["text1"];
$var2=$_GET["text2"];
?>

<label for="lista">Lista:</label>
<select name="lista">
<?php
for($i=1;$i<$var1+1;$i++){
if($var2==$i){
  echo "<option selected=\"selected\" value=\"$i\">Opcion a seleccionar Nro $i</option>";
}else{
  echo "<option value=\"$i\">Opcion a seleccionar Nro.$i</option<br>";
}
}
?>
</select>

</form>



</body>
</html>

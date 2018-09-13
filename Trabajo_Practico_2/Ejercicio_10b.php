<?php
$suma=0;
?>



<?php
for($i=1;$i<$_GET["cantidad"]+1;$i++){
if($_GET["Check$i"]==on){
echo "Se selecciono el Producto $i";
echo "<br>";
$suma=$suma+1;
}
}
echo "La cantidad de Productos seleccionados es de: $suma";
?>

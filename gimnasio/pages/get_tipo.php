<?php
include "dbcon.php";
    $query=mysqli_query($con,"select * from tipo where id_clase='$_GET[id_clase]'")or die(mysqli_error());

$tipo = array();
while($r=$query->fetch_object()){ $tipo[]=$r; }
if(count($tipo)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($tipo as $s) {
	print "<option value='$s->nombre'>$s->nombre</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>
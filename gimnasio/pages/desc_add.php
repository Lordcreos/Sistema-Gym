<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$nombre_tipo = $_POST['nombre_tipo'];

 




mysqli_query($con,"INSERT INTO tipo_descuentos(nombre_tipo)
VALUES('$nombre_tipo')")or die(mysqli_error($con));		
		





  echo "<script>document.location='descuento_registrar.php'</script>";


?>

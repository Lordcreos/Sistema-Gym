<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$nombre = $_POST['nombre'];
	$ruc = $_POST['ruc'];
	$telefono = $_POST['telefono'];
	$dni = $_POST['dni'];


		$total = 0;

		
	
	$query2=mysqli_query($con,"select * from clientes where ruc='$ruc'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('ruc ya existe!');</script>";
			echo "<script>document.location='cliente.php'</script>";
		}
		else
		{




			mysqli_query($con,"INSERT INTO clientes(nombre,ruc,telefono,dni)
				VALUES('$nombre','$ruc','$telefono','$dni')")or die(mysqli_error($con));

			
			echo "<script>document.location='cliente.php'</script>";


	
	




   



}





?>

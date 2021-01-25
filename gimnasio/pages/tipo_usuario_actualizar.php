


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../dist/includes/dbcon.php');
	
	$id_tipo = $_POST['id_tipo'];
		$nombre = $_POST['nombre'];



	mysqli_query($con,"update tipo_usuario set nombre='$nombre' where id_tipo='$id_tipo'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert('categoria actualizada correctamente!');</script>";
	echo "<script>document.location='tipo_usuarios.php'</script>";
	


?>

<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$nombre = $_POST['nombre'];

//validamos la imagen


	$query2=mysqli_query($con,"select * from tipo_usuario where nombre='$nombre'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('ya existe!');</script>";
			echo "<script>document.location='tipo_usuarios.php'</script>";
		}
		else
		{

				//sacando id ultimo cliente


   


	mysqli_query($con,"INSERT INTO tipo_usuario(nombre)
				VALUES('$nombre')")or die(mysqli_error($con));

			

	    $query=mysqli_query($con,"select * from tipo_usuario  ")or die(mysqli_error());
    $id_tra=0;
    while($row=mysqli_fetch_array($query)){
    $id_tipo=$row['id_tipo'];
							}




 //registrando permisos por default
 mysqli_query($con,"INSERT INTO permisos(id_menu,estado,id_tipo)
				VALUES('1','no','$id_tipo')")or die(mysqli_error($con));
  mysqli_query($con,"INSERT INTO permisos(id_menu,estado,id_tipo)
				VALUES('2','no','$id_tipo')")or die(mysqli_error($con));
    mysqli_query($con,"INSERT INTO permisos(id_menu,estado,id_tipo)
				VALUES('3','no','$id_tipo')")or die(mysqli_error($con));
        mysqli_query($con,"INSERT INTO permisos(id_menu,estado,id_tipo)
				VALUES('4','no','$id_tipo')")or die(mysqli_error($con));
            mysqli_query($con,"INSERT INTO permisos(id_menu,estado,id_tipo)
				VALUES('5','no','$id_tipo')")or die(mysqli_error($con));
            mysqli_query($con,"INSERT INTO permisos(id_menu,estado,id_tipo)
				VALUES('6','no','$id_tipo')")or die(mysqli_error($con));
                        mysqli_query($con,"INSERT INTO permisos(id_menu,estado,id_tipo)
				VALUES('7','no','$id_tipo')")or die(mysqli_error($con));





                mysqli_query($con,"INSERT INTO permisos_botones(id_botones,estado,id_tipo)
				VALUES('1','no','$id_tipo')")or die(mysqli_error($con));

                 mysqli_query($con,"INSERT INTO permisos_botones(id_botones,estado,id_tipo)
				VALUES('2','no','$id_tipo')")or die(mysqli_error($con));
                  mysqli_query($con,"INSERT INTO permisos_botones(id_botones,estado,id_tipo)
				VALUES('3','no','$id_tipo')")or die(mysqli_error($con));
                                     mysqli_query($con,"INSERT INTO permisos_botones(id_botones,estado,id_tipo)
				VALUES('4','no','$id_tipo')")or die(mysqli_error($con));

			echo "<script>document.location='tipo_usuarios.php'</script>";
		
}
?>

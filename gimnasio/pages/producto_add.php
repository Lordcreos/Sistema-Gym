<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$nombre_pro = $_POST['nombre_pro'];
	$descripcion = $_POST['descripcion'];
	$unidad = $_POST['unidad'];

	$precio_venta = $_POST['precio_venta'];
		
	$stock = $_POST['stock'];




		





$target_dir = "subir_prod/";

if (!empty($_FILES['imagen']['name'])){
    
      

	$target_file = $target_dir.basename($_FILES["imagen"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["imagen"]["tmp_name"]);
	if($check!==false) {
		echo "archivo es una imagen - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "el archivo no es una imagen.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "lo siento, el archivo ya existe.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["imagen"]["size"]>500000){
		echo "lo siento, tu archivo es demasiado grande.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)){
			
	$img=basename($_FILES["imagen"]["name"]);
	



			mysqli_query($con,"INSERT INTO producto(nombre_pro,descripcion,unidad,precio_venta,imagen,stock)
				VALUES('$nombre_pro','$descripcion','$unidad','$precio_venta','$img','$stock')")or die(mysqli_error($con));

			
			echo "<script>document.location='productos.php'</script>";


	
	
		} else{
			echo "No se pudo subir.";
		}



   
}
else{



			mysqli_query($con,"INSERT INTO producto(nombre_pro,descripcion,unidad,precio_venta,imagen,stock)
				VALUES('$nombre_pro','$descripcion','$unidad','$precio_venta','','$stock')")or die(mysqli_error($con));


			echo "<script>document.location='productos.php'</script>";
}









		


?>

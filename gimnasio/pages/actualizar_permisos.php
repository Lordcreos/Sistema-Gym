<?php session_start();
if(empty($_SESSION['id'])):
endif;

include('../dist/includes/dbcon.php');
	$id_tipo = $_POST['id_tipo'];


//actualiamos estados

	if(isset($_POST['gastos']))
{
	$gastos="false";
	//	echo "<script type='text/javascript'>alert('tienda false!');</script>";
			mysqli_query($con,"update permisos set estado='si' where id_tipo='$id_tipo' and id_menu='1'")or die(mysqli_error());

}
else {  


	mysqli_query($con,"update permisos set estado='no' where id_tipo='$id_tipo' and id_menu='1'")or die(mysqli_error());
	//		echo "<script type='text/javascript'>alert('tienda true!');</script>";
         
     }




	if(isset($_POST['ingresos']))
{
		
			mysqli_query($con,"update permisos set estado='si' where id_tipo='$id_tipo'  and id_menu='2'")or die(mysqli_error());
				//echo "<script type='text/javascript'>alert('clientes false!');</script>";
}
else {  
	mysqli_query($con,"update permisos set estado='no' where id_tipo='$id_tipo'  and id_menu='2'")or die(mysqli_error());

	//	echo "<script type='text/javascript'>alert('clientes true!');</script>";
         
     }


	
	if(isset($_POST['cat_gastos']))
{
		mysqli_query($con,"update permisos set estado='si' where id_tipo='$id_tipo' and  id_menu='3'")or die(mysqli_error());

}
else {  

        		mysqli_query($con,"update permisos set estado='no' where id_tipo='$id_tipo' and  id_menu='3'")or die(mysqli_error()); 
     }
	
	if(isset($_POST['cat_ingresos']))
{
		mysqli_query($con,"update permisos set estado='si' where id_tipo='$id_tipo' and id_menu='4'")or die(mysqli_error());

}
else {  
		mysqli_query($con,"update permisos set estado='no' where id_tipo='$id_tipo' and id_menu='4'")or die(mysqli_error());
         
     }

	
	if(isset($_POST['usuario']))
{
		mysqli_query($con,"update permisos set estado='si' where id_tipo='$id_tipo' and id_menu='5'")or die(mysqli_error());

}
else {  
		mysqli_query($con,"update permisos set estado='no' where id_tipo='$id_tipo' and id_menu='5'")or die(mysqli_error());
         
     }




	if(isset($_POST['docentes']))
{
		mysqli_query($con,"update permisos set estado='si' where id_tipo='$id_tipo' and id_menu='6'")or die(mysqli_error());

}
else {  
		mysqli_query($con,"update permisos set estado='no' where id_tipo='$id_tipo' and id_menu='6'")or die(mysqli_error());
         
     }
     	if(isset($_POST['deudas']))
{
		mysqli_query($con,"update permisos set estado='si' where id_tipo='$id_tipo' and id_menu='7'")or die(mysqli_error());

}
else {  
		mysqli_query($con,"update permisos set estado='no' where id_tipo='$id_tipo' and id_menu='7'")or die(mysqli_error());
         
     }
     	if(isset($_POST['alumnos']))
{
		mysqli_query($con,"update permisos set estado='si' where id_tipo='$id_tipo' and id_menu='8'")or die(mysqli_error());

}
else {  
		mysqli_query($con,"update permisos set estado='no' where id_tipo='$id_tipo' and id_menu='8'")or die(mysqli_error());
         
     }
     





	if(isset($_POST['eliminar']))
{
		mysqli_query($con,"update permisos_botones set estado='si' where id_tipo='$id_tipo' and  id_botones='1'")or die(mysqli_error());

}
else {  
	mysqli_query($con,"update permisos_botones set estado='no' where id_tipo='$id_tipo' and  id_botones='1'")or die(mysqli_error());
         
     }
	if(isset($_POST['guardar']))
{
		mysqli_query($con,"update permisos_botones set estado='si' where id_tipo='$id_tipo' and  id_botones='2'")or die(mysqli_error());

}
else {  
	mysqli_query($con,"update permisos_botones set estado='no' where id_tipo='$id_tipo' and  id_botones='2'")or die(mysqli_error());
         
     }
     	if(isset($_POST['editar']))
{
		mysqli_query($con,"update permisos_botones set estado='si' where id_tipo='$id_tipo' and  id_botones='3'")or die(mysqli_error());

}
else {  
	mysqli_query($con,"update permisos_botones set estado='no' where id_tipo='$id_tipo' and  id_botones='3'")or die(mysqli_error());
         
     }
     	if(isset($_POST['exportar']))
{
		mysqli_query($con,"update permisos_botones set estado='si' where id_tipo='$id_tipo' and  id_botones='4'")or die(mysqli_error());

}
else {  
	mysqli_query($con,"update permisos_botones set estado='no' where id_tipo='$id_tipo' and  id_botones='4'")or die(mysqli_error());
         
     }

	echo "<script type='text/javascript'>alert('permisos actualizado correctamente!');</script>";
	echo "<script>document.location='permisos.php'</script>";


?>

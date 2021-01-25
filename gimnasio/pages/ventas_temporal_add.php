<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$id_pedido = $_POST['id_pedido'];
	$id_producto = $_POST['id_producto'];
	$cantidad = $_POST['cantidad'];




		
	

mysqli_query($con,"INSERT INTO temporal_pedido(id_pedido,id_producto,cantidad)
VALUES('$id_pedido','$id_producto','$cantidad')")or die(mysqli_error($con));

//mysqli_query($con,"update producto set  estado='pedido' where id_pro='$id_producto'")or die(mysqli_error());

    $query=mysqli_query($con,"select * from producto where id_pro='$id_producto'")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $nombre_pro=$row['nombre_pro'];
}

  echo "<script type='text/javascript'>alert('EL PRODUCTO ".$nombre_pro." FUE AGREGADO CORRECTAMENTE');</script>";

	
			echo "<script>document.location='ventas.php'</script>";
	



?>

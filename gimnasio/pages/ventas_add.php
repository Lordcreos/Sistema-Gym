<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$num_pedido = $_POST['num_pedido'];
	$fecha = $_POST['fecha'];

  $id_sesion=$_SESSION['id'];





            $query6=mysqli_query($con,"select * from temporal_productos  where id_temporal='1' ")or die(mysqli_error());

                      while($row6=mysqli_fetch_array($query6)){
         $id_cliente=$row6['cliente'];

    }






    if ($id_cliente!=0)
    {


mysqli_query($con,"INSERT INTO pedidos(num_pedido,fecha,id_sesion,id_cliente)
VALUES('$num_pedido','$fecha','$id_sesion','$id_cliente')")or die(mysqli_error($con));		
		


$cont=0;
$id_pedidos = array();
$id_productos = array();


$cantidad = array();

            $query1=mysqli_query($con,"select * from temporal_pedido where id_pedido='$num_pedido'")or die(mysqli_error());

                      while($row1=mysqli_fetch_array($query1)){
           $cont++;
                   $id_pedidos[] = $row1['id_pedido'];
					$id_productos[] = $row1['id_producto'];
					$cantidad[] = $row1['cantidad'];

}

$i=0;

for ($i=0; $i <$cont ; $i++) { 

             mysqli_query($con,"INSERT INTO detalles_pedido(id_pedido,id_producto,cantidad)
VALUES('$id_pedidos[$i]','$id_productos[$i]','$cantidad[$i]')")or die(mysqli_error($con));
}


  mysqli_query($con,"delete from temporal_pedido where id_pedido='$num_pedido'")or die(mysqli_error());
  echo "<script type='text/javascript'>alert('venta hecha!');</script>";
//    mysqli_query($con,"delete from temporal_pedido where  id_pedido='$num_pedido'")or die(mysqli_error());

  mysqli_query($con,"update temporal_productos set cliente='' where id_temporal='1'")or die(mysqli_error());





  $monto=0;
  $caja_anterior=0;
          $query3=mysqli_query($con,"select * from caja   where estado='abierto'  ")or die(mysqli_error());
      while($row3=mysqli_fetch_array($query3)){
      $caja_anterior=$row3['monto'];
      }
      $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto   where z.id_pedido ='$num_pedido'  ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $monto=($row['precio_venta']*$row['cantidad'])+$monto;
      }
$monto=$caja_anterior+$monto;
    mysqli_query($con,"update caja set monto='$monto'  where estado='abierto'")or die(mysqli_error());
  
	echo "<script>document.location='generar_pdf.php?num_pedido=$num_pedido'</script>";


}

	

    else
    {


  
  
      echo "<script type='text/javascript'>alert('Tienes que seleccionar cliente!');</script>";
      echo "<script>document.location='ventas.php'</script>";



   



}




?>

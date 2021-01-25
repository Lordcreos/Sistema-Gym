<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];




	
	
            $query6=mysqli_query($con,"select * from temporal_ventas_dia  where id_temporal='1' ")or die(mysqli_error());

                      while($row6=mysqli_fetch_array($query6)){
         $id_cliente=$row6['cliente'];

    }



		if ($id_cliente!=0)
		{

   $fecha = date('Y-m-d');


            $year = date("Y");
            $cont=0;
            $id_pl=0;

            $query3=mysqli_query($con,"select * from venta_diaria ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
   $id_pl=$row3['id_venta_diaria'];
}
$mes=date("m");
$dia=date("d");
  $cont=$id_pl+1;
  $codigo=$year.$mes.$dia.$cont;

mysqli_query($con,"INSERT INTO venta_diaria(codigo,fecha,id_cliente)
VALUES('$codigo','$fecha','$id_cliente')")or die(mysqli_error($con));	



	mysqli_query($con,"update temporal_ventas_dia set cliente='' where id_temporal='1'")or die(mysqli_error());



	$monto=0;
	$caja_anterior=0;
	        $query3=mysqli_query($con,"select * from caja   where estado='abierto'  ")or die(mysqli_error());
      while($row3=mysqli_fetch_array($query3)){
      $caja_anterior=$row3['monto'];
      }
      
	    $query=mysqli_query($con,"select * from empresa ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $por_dia=$row['por_dia'];
  }



      $query=mysqli_query($con,"select * from venta_diaria    where codigo ='$codigo'  ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $monto=$por_dia+$monto;
      }
$monto=$caja_anterior+$monto;
    mysqli_query($con,"update caja set monto='$monto'  where estado='abierto'")or die(mysqli_error());
			
			echo "<script>document.location='generar_ticket_diario.php?codigo=$codigo'</script>";




		}
		else
		{


	
	
			echo "<script type='text/javascript'>alert('Tienes que seleccionar cliente!');</script>";
			echo "<script>document.location='venta_diaria.php'</script>";



   



}





?>

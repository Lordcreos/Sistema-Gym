<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];




	
	
            $query6=mysqli_query($con,"select * from temporal  where id_temporal='1' ")or die(mysqli_error());

                      while($row6=mysqli_fetch_array($query6)){
         $id_cliente=$row6['cliente'];
                  $id_plan=$row6['plan'];


    }

            $query8=mysqli_query($con,"select * from planes  where id_plan='$id_plan' ")or die(mysqli_error());

                      while($row8=mysqli_fetch_array($query8)){
         $numero_tiempo=$row8['numero_tiempo'];
                  $tipo_tiempo=$row8['tipo_tiempo'];
   $precio=$row8['precio'];

    }

		if ($id_cliente!=0 and $id_plan!=0)
		{
						$dias=0;
if ($tipo_tiempo=='meses') {
	$dias=30*$numero_tiempo;
}
if ($tipo_tiempo=='dias') {
	$dias=$numero_tiempo;
}
   $fecha_inicio = date('Y-m-d');

$di='+'.$dias.' day';
$fecha_fin = date('Y-m-d', strtotime($di)) ;
            $year = date("Y");
            $cont=0;
            $id_pl=0;

            $query3=mysqli_query($con,"select * from plan_cliente ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
   $id_pl=$row3['id_plan_cliente'];
}
$mes=date("m");
$dia=date("d");
  $cont=$id_pl+1;
  $codigo=$year.$mes.$dia.$cont;

mysqli_query($con,"INSERT INTO plan_cliente(codigo,fecha_inicio,fecha_fin,id_cliente,id_plan)
VALUES('$codigo','$fecha_inicio','$fecha_fin','$id_cliente','$id_plan')")or die(mysqli_error($con));	



	mysqli_query($con,"update temporal set plan='',cliente='' where id_temporal='1'")or die(mysqli_error());




  $monto=0;
  $caja_anterior=0;
          $query3=mysqli_query($con,"select * from caja   where estado='abierto'  ")or die(mysqli_error());
      while($row3=mysqli_fetch_array($query3)){
      $caja_anterior=$row3['monto'];
      }
      $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente    where codigo ='$codigo'  ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $monto=$row['precio']+$monto;
      }
$monto=$caja_anterior+$monto;
    mysqli_query($con,"update caja set monto='$monto'  where estado='abierto'")or die(mysqli_error());





    
			
			echo "<script>document.location='generar_carnet_plan.php?codigo=$codigo'</script>";




		}
		else
		{


	
	
			echo "<script type='text/javascript'>alert('Tienes que seleccionar cliente o plan!');</script>";
			echo "<script>document.location='plan_cliente.php'</script>";



   



}





?>

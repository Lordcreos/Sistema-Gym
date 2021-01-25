<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];


     if(isset($_REQUEST['id_plan_cliente']))
            {
              $id_plan_cliente=$_REQUEST['id_plan_cliente'];
            }
            else
            {
            $id_plan_cliente=$_POST['id_plan_cliente'];
          }

   $fecha = date('Y-m-d');	
	$contador=0;
		$contador_hoy=0;
            $query6=mysqli_query($con,"select * from plan_asistencia  where plan_cliente='$id_plan_cliente' and fecha_asistencia<='$fecha' ")or die(mysqli_error());

                      while($row6=mysqli_fetch_array($query6)){
		$contador++;

    }
            $query7=mysqli_query($con,"select * from plan_asistencia  where plan_cliente='$id_plan_cliente' and fecha_asistencia='$fecha' ")or die(mysqli_error());

                      while($row7=mysqli_fetch_array($query7)){
		$contador_hoy++;

    }

if ($contador_hoy==1) {

	echo "<script type='text/javascript'>alert('Ya registro asistencia hoy! no puedes registrar dos veces el mismo dia!');</script>";
			echo "<script>document.location='asistencia_plan_agregar.php?id_plan_cliente=$id_plan_cliente'</script>";
}

		if ($contador==0)
		{





mysqli_query($con,"INSERT INTO plan_asistencia(fecha_asistencia,plan_cliente)
VALUES('$fecha','$id_plan_cliente')")or die(mysqli_error($con));	




		
			echo "<script>document.location='asistencia_plan_agregar.php?id_plan_cliente=$id_plan_cliente'</script>";




		}
		else
		{


	
	
			echo "<script type='text/javascript'>alert('Su membrecia ya vencio registra otra membrecia!');</script>";
			echo "<script>document.location='asistencia_plan_agregar.php?id_plan_cliente=$id_plan_cliente'</script>";



   



}





?>

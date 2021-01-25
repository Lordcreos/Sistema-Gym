 <?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	



          if(isset($_REQUEST['id_camion']))
            {
              $id_camion=$_REQUEST['id_camion'];
            }
            else
            {
            $id_camion=$_POST['id_camion'];
          }


		///finzalizo encriptacion


	mysqli_query($con,"update temporal set id_camion='$id_camion'  where id_temporal='1'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='seleccion_camion_cliente.php'</script>";	

	




   







?>

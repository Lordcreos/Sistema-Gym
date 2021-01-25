 <?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];



          if(isset($_REQUEST['id_cliente']))
            {
              $id_cliente=$_REQUEST['id_cliente'];
            }
            else
            {
            $id_cliente=$_POST['id_cliente'];
          }






	mysqli_query($con,"update temporal set cliente='$id_cliente'  where id_temporal='1'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' cliente seleccionado !');</script>";
	echo "<script>document.location='plan_cliente.php'</script>";	

	




   







?>

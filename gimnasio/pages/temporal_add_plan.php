 <?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];



          if(isset($_REQUEST['id_plan']))
            {
              $id_plan=$_REQUEST['id_plan'];
            }
            else
            {
            $id_plan=$_POST['id_plan'];
          }


  


	mysqli_query($con,"update temporal set plan='$id_plan'  where id_temporal='1'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' plan seleccionado !');</script>";
	echo "<script>document.location='plan_cliente.php'</script>";	

	




   







?>

 <?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];


          if(isset($_REQUEST['num']))
            {
              $num=$_REQUEST['num'];
            }
            else
            {
            $num=$_POST['num'];
          }





		///finzalizo encriptacion


	mysqli_query($con,"update temporal set id_camion='0',id_cliente='0' where id_temporal='1'")or die(mysqli_error());

			


	echo "<script>document.location='generar_pdf.php?num=$num'</script>";	

	




   







?>

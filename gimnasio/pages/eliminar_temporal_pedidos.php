<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_temporal']))
            {
              $id_temporal=$_REQUEST['id_temporal'];
            }
            else
            {
            $id_temporal=$_POST['id_temporal'];
          }





  mysqli_query($con,"delete from temporal_pedido where id_temporal= '$id_temporal'")or die(mysqli_error());
  
//  echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='ventas.php'</script>";  
  
?>
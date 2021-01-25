<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_pro']))
            {
              $id_pro=$_REQUEST['id_pro'];
            }
            else
            {
            $id_pro=$_POST['id_pro'];
          }

   if(isset($_REQUEST['tipo']))
            {
              $tipo=$_REQUEST['tipo'];
            }
            else
            {
            $tipo=$_POST['tipo'];
          }



  mysqli_query($con,"delete from producto where id_pro= '$id_pro'")or die(mysqli_error());
  
  echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='$tipo.php'</script>";  
  
?>
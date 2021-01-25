<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');


          if(isset($_REQUEST['num_pedido']))
            {
              $num_pedido=$_REQUEST['num_pedido'];
            }
            else
            {
            $num_pedido=$_POST['num_pedido'];
          }



  mysqli_query($con,"delete from pedidos where num_pedido= '$num_pedido'")or die(mysqli_error());
    mysqli_query($con,"delete from detalles_pedido where id_pedido= '$num_pedido'")or die(mysqli_error());
//  echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='facturacion.php'</script>";  
  
?>
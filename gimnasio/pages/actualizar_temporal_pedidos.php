<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');

  $id_temporal = $_POST['id_temporal'];
  $cantidad = $_POST['cantidad'];




  mysqli_query($con,"update temporal_pedido set cantidad='$cantidad' where id_temporal='$id_temporal'")or die(mysqli_error());

  
//  echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='ventas.php'</script>";  
  
?>
<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_detalles']))
            {
              $id_detalles=$_REQUEST['id_detalles'];
            }
            else
            {
            $id_detalles=$_POST['id_detalles'];
          }


          if(isset($_REQUEST['num_pedido']))
            {
              $num_pedido=$_REQUEST['num_pedido'];
            }
            else
            {
            $num_pedido=$_POST['num_pedido'];
          }


            $query3=mysqli_query($con,"select * from pedidos where num_pedido='$num_pedido' ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
  
   $bodega=$row3['bodega'];
    

}
              $query=mysqli_query($con,"select * from detalles_pedido where id_detalles= '$id_detalles' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_producto=$row['id_producto'];
  }
mysqli_query($con,"update producto set  estado='' where id_pro='$id_producto'")or die(mysqli_error());

  mysqli_query($con,"delete from detalles_pedido where id_detalles= '$id_detalles'")or die(mysqli_error());
  
  if ($bodega=="almacen") {
  echo "<script>document.location='editar_almacen.php?num_pedido=$num_pedido'</script>";  
  }
     else
     {
  echo "<script>document.location='editar_pedido.php?num_pedido=$num_pedido'</script>";  
     }
  
?>
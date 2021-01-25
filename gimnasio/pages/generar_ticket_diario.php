<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
$codigo=$_GET['codigo'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />


  <link rel='stylesheet' type='text/css' href='css/style.css' />
  <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
  <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>


<style>

.left{
    float: left;

}
.right{
    float: right;

}
.center{

   display:inline-block
}
@media print {
    .btn-print {
      display:none !important;
    size:30px;
    }

}
hr {
  height: 3px;
  width: 100%;
  background-color: black;
}
#abajo{
    height: 3px;
  width: 30%;
  background-color: black;
}
tr{
  font-family:'Helvetica','Verdana','Monaco',sans-serif;
  border:none; font-size: 15px;

}
#terminos{
    border:none; font-size: 8px;
}
</style>
</style>
</head>

<body>

  <?php
  include('../dist/includes/dbcon.php');


  ?>

  <?php
    $query31=mysqli_query($con,"select * from empresa ")or die(mysqli_error());
    
    while($row31=mysqli_fetch_array($query31)){
    $nombre_empresa=$row31['empresa'];
    $direccion_empresa=$row31['direccion'];
        $ruc_empresa=$row31['ruc'];
        $telefono=$row31['telefono'];
   $pago_por_dia=$row31['por_dia'];
    $impuesto_diario=$row31['impuesto_diario']/100;
$total_pagar=($impuesto_diario/100)*$pago_por_dia+$pago_por_dia;
    }

 
    $query6=mysqli_query($con,"select * from  venta_diaria AS z INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente where codigo='$codigo' ")or die(mysqli_error());
    $i=1;
    while($row6=mysqli_fetch_array($query6)){
      $fecha=$row6['fecha'];


  
             
                        $nombre_cliente=$row6['nombre'];
              
                                       $dni=$row6['dni'];//hora incial
    
    }






$session_id=$_SESSION['id'];
$user_query = mysqli_query($con,"select * from usuario where id = '$session_id'")or die(mysql_error());
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['usuario'];
  ?>


  <div id="page-wrap">

    <div class="container">


<br>
<br>
   <a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
    <br>
   <br>
      <br>



 <a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "ventas_diario_totales.php" ><i class ="glyphicon glyphicon-print"></i>Regresar</a>

      
                  <center>
                  <h3>TCIKET PAGO /DIARIO</h3>
                  </center>
  

<center>            <table class="table table-bordered table-striped"  style="border:none;">
                    <thead>
                   <tr>


                        <th style="border:none;">

  <?php echo $nombre_empresa;?>  
  <br>
  Calle: <?php echo $direccion_empresa;?>
  <br>
  RUC: <?php echo $ruc_empresa;?>
  <br>
  ----------------------------
   <br>
   CARNET MEMBRESIA
     <br>
  ----------------------------
   <br>
codigo
<br>
<img src="barcode.php?text=<?php echo $codigo; ?>&size=50&orientation=horizontal&codetype=Code39&print=true&sizefactor=1" />

  
   <br>

    Cliente: <?php echo $nombre_cliente;?>
  <br>
  Dni: <?php echo $dni;?>
  <br>


  Fecha : <?php echo $fecha;?>
        <br>

  A pagar: S/. <?php echo $pago_por_dia;?>

         <br>
           Impuesto: S/. <?php echo $impuesto_diario;?>

         <br>
                  Total: S/. <?php echo $total_pagar;?>

         <br>
  Usuario :  <?php echo $user_username;?>
    <br>
  ----------------------------
    <br>
    Gracias por su preferencia
      <br>
    Regrese pronto
                        </th>

                        
                      
                      </tr>
                    </thead>
                    <tbody>
        
                   </tbody>

                  </table>    

</center>
                                         



  </div>




              
</body>

</html>

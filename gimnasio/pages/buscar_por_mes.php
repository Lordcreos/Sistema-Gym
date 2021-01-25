
<?php include 'header.php';

//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>      <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
  <?php
  $nombre_cliente="";
    $nombre_socio="";
    $placa="";

  $suma_total=0;
  $id_tipo = $_POST['id_tipo'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
  $id_camion = $_POST['id_camion'];
  $imagen="";
$monto=0;
    $query=mysqli_query($con,"select * from clientes  AS v  
INNER JOIN comprobante AS c
    ON c.id_cliente = v.id_cliente INNER JOIN camiones AS x
    ON x.id_camion = c.id_camion where  c.id_camion='$id_camion' and MONTH(fecha)='$mes' and YEAR(fecha)='$anio' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_comprobante=$row['id_comprobante'];

     $nombre_cliente=$row['nombre'];
    $placa=$row['placa'];
        $nombre_socio=$row['nombre_socio'];
  //  $total_descuentos=$row['total_descuentos'];
//$suma_total=$total_descuentos+$suma_total;

        $imagen=$row['imagen'];
      }



    $query=mysqli_query($con,"select * from tipo_descuentos   AS t  
INNER JOIN descuentos AS d 
    ON d.id_tipo = t.id_tipo INNER JOIN comprobante AS c
    ON d.numero_id = c.num where   c.id_camion='$id_camion'and t.id_tipo=$id_tipo and MONTH(fecha)='$mes' and YEAR(fecha)='$anio' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
$monto=$row['monto_des'];
 $mon = floatval($monto);
 

 $suma_total = floatval($mon+$suma_total);



    }

?>



  <div class = "row">
        <div class = "col-md-1 ">
              <div class="box-header">
           <IMG src="subir_camion/<?php echo $imagen;?>" style="height:72PX; width:57PX" />
                </div>

</div>
  <div class = "col-md-6 ">
              <div class="box-header">
                Nombre cliente  <?php echo $nombre_cliente;?><br>

                   <p>Nombre socio: <?php echo $nombre_socio;?></p>
  <p>Placa: <?php echo $placa;?></p>

    <p>TOTAL DESCUENTOS: <?php echo $suma_total;?></p>
                             
                </div>

</div>
  <div class = "col-md-2 ">
              <div class="box-header">

                </div>

</div>
   <div class = "col-md-3 ">
<a href="<?php  echo "descuentos_por_mes.php?id_camion=$id_camion";?>" class="btn btn-primary btn-print"  style=" font-size: 12px " role="button">Regresar</a>
                          <a class = "btn btn-success btn-print" href="<?php  echo "descuentos_por_mes.php?id_camion=$id_camion";?>"  onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>

</div>    
</div>
 <!--end of modal-->

                        <div class="box-body">
                  <!-- Date range -->  <section class="content-header">
             
          </section>




                  <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
   
         








        <footer>

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include 'datatable_script.php';?>
    <!-- /gauge.js -->



          <script>
        $(document).ready( function() {
                $('#example1').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


                }

              );
              } );
    </script>
  </body>
</html>

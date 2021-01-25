
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
  $id_camion = $_POST['id_camion'];
    $mes = $_POST['mes'];
        $anio = $_POST['anio'];
$nombre_socio="";


            $query=mysqli_query($con,"select * from clientes  V  
INNER JOIN comprobante AS c
    ON c.id_cliente = v.id_cliente INNER JOIN camiones AS x
    ON X.id_camion = c.id_camion where  c.id_camion='$id_camion' and MONTH(fecha)='$mes' and YEAR(fecha)='$anio' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_comprobante=$row['id_comprobante'];

        $nombre_socio=$row['nombre_socio'];

      }

  ?>

 <!--end of modal-->
  <div class = "row">
        <div class = "col-md-1 ">
              <div class="box-header">
              <IMG src="images/reportes.jpg" style="height:72PX; width:57PX" />
                </div>

</div>
  <div class = "col-md-6 ">
              <div class="box-header">
              

                   <p>Nombre socio: <?php echo $nombre_socio;?></p>

                             
                </div>

</div>
  <div class = "col-md-2 ">
              <div class="box-header">

                </div>

</div>
   <div class = "col-md-3 ">


</div>    
</div>


                        <div class="box-body">
                  <!-- Date range -->  <section class="content-header">
             
          </section>




                  <div class="box-header">
                    <a href="<?php  echo "camion_filtrar_por_mes.php?id_camion=$id_camion";?>" class="btn btn-primary btn-print"  style=" font-size: 12px " role="button">Regresar</a>
                          <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
                  <h3 class="box-title"> Reporte por mes</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="board board-js">
                   <thead>
                            <tr>

                <th>EMPRESA</th>
                        <th>FC</th>
                          <th>FACT COOP</th>

                        <th> FECHA</th>


                           <th> PLACA </th>
          
                        <th> FLETE  </th>

                    

                       <th class="btn-print"> ACCION </th>

                      </tr>
                    </thead>
                    <tbody>
                   




<?php


 













            $query=mysqli_query($con,"select * from clientes  V  
INNER JOIN comprobante AS c
    ON c.id_cliente = v.id_cliente INNER JOIN camiones AS X
    ON X.id_camion = c.id_camion where  c.id_camion='$id_camion' and MONTH(fecha)='$mes' and YEAR(fecha)='$anio' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_comprobante=$row['id_comprobante'];
  
?>

                      <tr >
                                    <td><?php echo $row['nombre_socio'];?></td>
                                      <td><?php echo $row['fac_comer'];?></td>
              <td><?php echo $row['fm'];?></td>
              <td><?php echo $row['fecha'];?></td>
                      <td><?php echo $row['placa'];?></td>
                        <td><?php echo $row['pagado'];?></td>
 
     
                      </tr>

                                          <?php
                      }
                      
?>


 <!--end of modal-->

                    </tbody>
         








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

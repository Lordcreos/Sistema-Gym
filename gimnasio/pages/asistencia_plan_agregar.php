
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
     if(isset($_REQUEST['id_plan_cliente']))
            {
              $id_plan_cliente=$_REQUEST['id_plan_cliente'];
            }
            else
            {
            $id_plan_cliente=$_POST['id_plan_cliente'];
          }


?>

 <!--end of modal-->

                        <div class="box-body">
                  <!-- Date range -->  <section class="content-header">
             
          </section>

 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
 <a class="btn btn-danger btn-print" href="<?php  echo "asistencia_plan_add.php?id_plan_cliente=$id_plan_cliente";?>"  role="button">Agregar asistencia hoy</a>


                  <div class="box-header">
                  <h3 class="box-title"> LISTA ASISTENCIAS</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
  <table id="example2" class="table table-bordered table-striped">
                   <thead>
                            <tr>
                                 <th>Codigo</th>
    <th>Nombre cliente</th>
                        <th>Dni</th>
                        <th>Fecha asistencia </th>
  
        

                      </tr>
                    </thead>
                    <tbody>
                   




<?php


 $fechaActual = date('Y-m-d');



?>

   <?php
 $nombre_cliente="";
    $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente  where  id_plan_cliente='$id_plan_cliente'  ")or die(mysqli_error());
    $contador=0;
    while($row=mysqli_fetch_array($query)){
$contador++;
 $nombre_cliente=$row['nombre'];
  $fecha_inicio=$row['fecha_inicio'];
   $fecha_fin=$row['fecha_fin'];
    }

?>

  <div class = "row">
        <div class = "col-md-4 col-lg-12 hide-section">
            <a class="btn btn-primary btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">MEMBRESIA DE:  <label style='color:black;  font-size: 25px '><?php echo $nombre_cliente;?></label></a>

  <a class="btn btn-warning btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Fecha inicio= <label style='color:black;  font-size: 25px '>=<?php echo $fecha_inicio;?></label></a>
  <a class="btn btn-success btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Fecha fin= <label style='color:black;  font-size: 25px '>=<?php echo $fecha_fin;?></label></a>


</div>

      
</div>

 <?php







    $query=mysqli_query($con,"select * from plan_asistencia AS p INNER JOIN plan_cliente AS z
      ON p.plan_cliente = z.id_plan_cliente  INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente  where  plan_cliente='$id_plan_cliente'  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
   $codigo=$row['codigo'];
      $id_plan_cliente=$row['id_plan_cliente'];
?>

                      <tr >
                                    <td><?php echo $row['codigo'];?></td>
                                           <td><?php echo $row['nombre'];?></td>
                                      <td><?php echo $row['dni'];?></td>

              

                             <td><?php echo $row['fecha_asistencia'];?></td>
           

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



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>
  </body>
</html>

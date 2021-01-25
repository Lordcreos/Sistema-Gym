
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
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->
                        <div class="box-body">
                  <!-- Date range -->

          </div>

                  <div class="box-header">
                  <h3 class="box-title"> MENU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">











                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">









          
                                        <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>


                      <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                         <center><h3> USUARIO </h3></center>
                        <div class="small-box bg-white">
                          <div class="inner">


<a title="usuario" href="usuario.php"><IMG src="img/usuario.png" width="250px" height="250px"/></a>
                         
                          </div>
                          <div class="icon" style="margin-top:10px">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                   
                        </div>
                      </div><!-- ./col -->
                                        <?php
                      }
                      ?>

                                      <?php
                if ($tipo=="administrador" ) {
                    
                      ?>
                      
                      <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                            <center><h3> CONFIGURACION </h3></center>
                        <div class="small-box bg-white">
                          <div class="inner">


<a title="configuracion" href="configuracion.php"><IMG src="img/producto.png" width="250px" height="250px"/></a>
                         
                          </div>
                          <div class="icon" style="margin-top:10px">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                    
                        </div>
                      </div><!-- ./col -->
                                    <?php
                      }
                      ?>

                                      <?php
                if ($tipo=="cliente" ) {
                    
                      ?>
                      <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                       <center><h3> RESERVAS </h3></center>
                        <div class="small-box bg-white">
                          <div class="inner">


<a title="reserva" href="reserva.php"><IMG src="img/cat_ingresos.png" width="250px" height="250px"/></a>
                         
                          </div>
                          <div class="icon" style="margin-top:10px">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                  
                        </div>
                      </div><!-- ./col -->
                                       <?php
                      }
                      ?>
          


                                              <?php
                if ($tipo=="administrador" or $tipo=="empleado") {
                    
                      ?>
                         <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                     <center><h3>REPORTE ENTRE FECHAS</h3></center>
                        <div class="small-box bg-white">
                          <div class="inner">


<a title="reportes" href="reportes_por_fecha.php"><IMG src="img/reportes.png" width="250px" height="250px"/></a>
                         
                          </div>
                          <div class="icon" style="margin-top:10px">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                    
                        </div>
                      </div><!-- ./col -->

                     <?php
                      }
                      ?>


                                              <?php
                if ($tipo=="administrador" or $tipo=="empleado") {
                    
                      ?>
       <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                     <center><h3>REPORTE POR DIA</h3></center>
                        <div class="small-box bg-white">
                          <div class="inner">


<a title="reportes" href="reportes_por_dia.php"><IMG src="img/reportes.png" width="250px" height="250px"/></a>
                         
                          </div>
                          <div class="icon" style="margin-top:10px">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                    
                        </div>
                      </div><!-- ./col -->
       <?php
                      }
                      ?>

                                                               <?php
                if ($tipo=="administrador" or $tipo=="empleado") {
                    
                      ?>

       <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                     <center><h3>REPORTE POR MES</h3></center>
                        <div class="small-box bg-white">
                          <div class="inner">


<a title="reportes" href="reportes_por_mes.php"><IMG src="img/reportes.png" width="250px" height="250px"/></a>
                         
                          </div>
                          <div class="icon" style="margin-top:10px">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                    
                        </div>
                      </div><!-- ./col -->
                           <?php
                      }
                      ?>


                                                               <?php
                if ($tipo=="administrador" or $tipo=="empleado") {
                    
                      ?>

       <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                     <center><h3>REPORTE ULTIMOS 7 DIAS</h3></center>
                        <div class="small-box bg-white">
                          <div class="inner">


<a title="reportes" href="reportes_ultimos_7dias.php"><IMG src="img/reportes.png" width="250px" height="250px"/></a>
                         
                          </div>
                          <div class="icon" style="margin-top:10px">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                    
                        </div>
                      </div><!-- ./col -->
                           <?php
                      }
                      ?>

                  </div><!--row-->
                  
      
  
   
            </div><!-- /.col (right) -->
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             Sistema de gavetas <a href="#"></a>
          </div>
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

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>


    <!-- /gauge.js -->
  </body>
</html>

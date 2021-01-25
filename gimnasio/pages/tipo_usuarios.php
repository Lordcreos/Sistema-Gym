
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
          <?php 
    if ($nombre=="admin") {
      # code...
    
?>
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
             <?php
                      if ($exportar=="si") {
                    
                      ?>
                <div class="panel-heading">
      
          <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> IMPRESION</a>

        </div>
        <?php
                      }
                      ?>

                <?php
                      if ($guardar=="si") {
                    
                      ?>
 <button type="button" class="btn btn-primary btn-lg btn-print" data-toggle="modal" data-target="#miModal">
  NUEVO
</button>
     <?php
                      }
                      ?>
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="tipo_usuario_add.php" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Nombre</label>
                        <div class="input-group col-sm-8">
                          <input type="text" class="form-control pull-right" id="nombre" name="nombre" required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
   



                    <div class="col-md-12">
                       <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-print" id="daterange-btn"  name="">GUARDAR</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                         </div>

                    </div>

          </form>

          </div>
      </div>
   
    </div>
  </div>
</div>
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> LISTA TIPO USUARIOS</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>


                        
                          

                          <th> Nombre </th>
                  
                       <th class="btn-print"> Accion </th>

                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from tipo_usuario  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $cid=$row['id_tipo'];
 
?>
                      <tr >
              <td><?php echo $row['nombre'];?></td>

              

      

                        <td>
                                   <?php
                      if ($eliminar=="si") {
                    
                      ?>
   <a class="small-box-footer btn-print"  href="<?php  echo "eliminar_tipo_usuario.php?cid=$cid";?>"><i class="glyphicon glyphicon-remove"></i></a>
   <?php
                      }
                      ?>
                               <?php
                      if ($editar=="si") {
                    
                      ?>

        <a href="#updateordinance<?php echo $row['id_tipo'];?>" data-target="#updateordinance<?php echo $row['id_tipo'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer btn-print"><i class="glyphicon glyphicon-edit text-blue"></i></a>
            <?php
                      }
                      ?>

            </td>
                      </tr>
        <div id="updateordinance<?php echo $row['id_tipo'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">ACCION DETALLES TIPO USUARIO</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="tipo_usuario_actualizar.php" enctype='multipart/form-data'>

        <div class="form-group">
          <div class="col-lg-9">
            <input type="hidden" class="form-control" id="id" name="id_tipo" value="<?php echo $row['id_tipo'];?>" required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">Nombre</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="price" name="nombre" value="<?php echo $row['nombre'];?>"   required>
          </div>
        </div>

              <div class="modal-footer">
    <button type="submit" class="btn btn-primary">GUARDAR</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
              </div>
        </form>
            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->

<?php $i++;}?>
                    </tbody>

                  </table>
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
            SISTEMA DE GASTOS <a href="#"></a>
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
          <?php 
  }
      # code...
    
?>

    <!-- /gauge.js -->
  </body>
</html>

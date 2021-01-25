
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
                      if ($tipo=="administrador" or $tipo=="empleado") 
                    {
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
 <!--end of modal-->
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="planes_add.php" enctype="multipart/form-data" class="form-horizontal">


<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Seleccione dias / meses</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                       <select class="form-control select2" name="tipo_tiempo" required>

                  <option value="dias">Dias</option>
                       <option value="meses">Meses</option>
         s
      
              </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >descripcion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                  <textarea class="form-control pull-right" id="date" name="descripcion" placeholder="descripcion" required></textarea>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Numero de dias/ meses</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                                  <input type="text" class="form-control pull-right" id="numero_tiempo" name="numero_tiempo" placeholder="numero_tiempo " required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>




<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Precio</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
            <input type="text" class="form-control" id="namecelu" name="precio" placeholder="precio" required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>





  


 

    <button type="submit" class="btn btn-primary">Guardar cambios</button>

       

              <!-- /.input group -->
             

               

          </form>
              
          </div>

                  <div class="box-header">
                  <h3 class="box-title"> Lista planes</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>


                        <th>Id</th>
                        <th>Tipo de tiempo</th>
                  
                        <th> Numero de dias/meses </th>
                          

                          <th> Descripcion </th>
 
                           <th> precio  </th>
                         
                  

                       <th class="btn-print"> Accion </th>

                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from planes ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_plan=$row['id_plan'];
  $tipo_tiempo=$row['tipo_tiempo'];

?>
                      <tr >
       
 <td><?php echo $row['id_plan'];?></td>
                        <td><?php echo $row['tipo_tiempo'];?></td>
                        <td><?php echo $row['numero_tiempo'];?></td>
                        <td><?php echo $row['descripcion'];?></td>
                        <td><?php echo $row['precio'];?></td>

         



          
      

                        <td>
<a class="small-box-footer btn-print" href="<?php  echo "eliminar_plan.php?id_plan=$id_plan";?>" onclick="return confirm('¿Está seguro de que desea eliminar este producto??');"" > <i class="glyphicon glyphicon-remove"></i></a>

 

        <a href="#updateordinance<?php echo $row['id_plan'];?>" data-target="#updateordinance<?php echo $row['id_plan'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer btn-print"><i class="glyphicon glyphicon-edit text-blue"></i></a>

            </td>
                      </tr>
        <div id="updateordinance<?php echo $row['id_plan'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 900px; height: 900px;">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Actualizar los detalles del plan</h4>
              </div>
              <div class="modal-body" style="width: 100%; height: 100%;">
        <form class="form-horizontal" method="post" action="plan_actualizar.php" enctype='multipart/form-data'>

            <input type="hidden" class="form-control" id="id_plan" name="id_plan" value="<?php echo $row['id_plan'];?>" required>
                
<div class="col-md-12 btn-print">

               <div class="form-group">
          <label class="control-label col-lg-3" for="price">Tipo tiempo</label><br>
          <div class="input-group col-md-8">
                   <select class="form-control select2" style="width: 60%;" name="tipo_tiempo" id="tipo_tiempo"> <br>
                     <option value="dias" <?php if($tipo_tiempo=="dias") {echo "selected"; }?>>Dias</option> 
                     <option value="meses" <?php if($tipo_tiempo=="meses") {echo "selected"; }?>>Meses</option> 
                 
      
              </select>
          </div>
        </div>
       </div>
       <div class="col-md-12 btn-print">
        <div class="form-group">
          <label class="control-label col-lg-3" for="price">descripcion</label><br>
          <div class="input-group col-md-8">
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row['descripcion'];?>" required>
          </div>
        </div>
             </div>
<div class="col-md-12 btn-print">

              
        <div class="form-group">
          <label class="control-label col-lg-3" for="file">Numero de dias/meses</label>
          <div class="input-group col-md-8"">
           <input type="text" class="form-control" id="numero_tiempo" name="numero_tiempo" value="<?php echo $row['numero_tiempo'];?>" required>
          </div>
        </div>
        </div>


<div class="col-md-12 btn-print">

               <div class="form-group">
          <label class="control-label col-lg-3" for="name">Precio </label>
          <div class="input-group col-md-8">
            <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $row['precio'];?>" required>
          </div>
        </div>
        </div>






              </div><br><br><br><hr>
              <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
        </form>
            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->

<?php 
}?>
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
            Sistema de peluquerias <a href="#"></a>
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
                      ?>

    <!-- /gauge.js -->
  </body>
</html>

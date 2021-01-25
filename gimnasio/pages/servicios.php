
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
                  <form method="post" action="producto_add.php" enctype="multipart/form-data" class="form-horizontal">
   <input type="hidden" class="form-control" id="tipo" name="tipo" value="servicios" required>
            <input type="hidden" class="form-control" id="stock" name="stock" value="" required>
              <input type="hidden" class="form-control" id="unidad" name="unidad" value="" required>

<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >nombre</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="date" name="nombre_pro" placeholder="nombre producto" required>
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
                        <label for="date" >precio venta</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
            <input type="text" class="form-control" id="namecelu" name="precio_venta" placeholder="precio de venta" required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>




<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Imagen</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
            <input type="file" class="form-control" id="imagen" name="imagen"  >
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
                  <h3 class="box-title"> Lista Servicios</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>


                        <th>#</th>
                        <th>nombre producto</th>
                  
                        <th> descripcion </th>
                          

                  
 
                           <th> precio venta </th>
                         
                           <th> imagen </th> 
                   

                       <th class="btn-print"> Accion </th>

                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from producto where tipo='servicios'")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $cid=$row['id_pro'];
    $id_pro=$row['id_pro'];
        $tipo=$row['tipo'];
?>
                      <tr >
       
 <td><?php echo $row['id_pro'];?></td>
                        <td><?php echo $row['nombre_pro'];?></td>
                        <td><?php echo $row['descripcion'];?></td>


            <td><?php echo $row['precio_venta'];?></td>

 <td><IMG src="subir_prod/<?php echo $row['imagen'];?>" style="height:50PX" /></td>


          
      

                        <td>
<a class="small-box-footer btn-print" href="<?php  echo "eliminar_producto.php?id_pro=$id_pro&tipo=$tipo";?>" onclick="return confirm('¿Está seguro de que desea eliminar este producto??');"" > <i class="glyphicon glyphicon-remove"></i></a>

 

        <a href="#updateordinance<?php echo $row['id_pro'];?>" data-target="#updateordinance<?php echo $row['id_pro'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer btn-print"><i class="glyphicon glyphicon-edit text-blue"></i></a>

            </td>
                      </tr>
        <div id="updateordinance<?php echo $row['id_pro'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 900px; height: 900px;">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Actualizar los detalles del Producto</h4>
              </div>
              <div class="modal-body" style="width: 100%; height: 100%;">
        <form class="form-horizontal" method="post" action="producto_actualizar.php" enctype='multipart/form-data'>

            <input type="hidden" class="form-control" id="id_pro" name="id_pro" value="<?php echo $row['id_pro'];?>" required>
             <input type="hidden" class="form-control" id="stock" name="stock" value="" required>
              <input type="hidden" class="form-control" id="unidad" name="unidad" value="" required>
                            <input type="hidden" class="form-control" id="tipo" name="tipo" value="servicios" required>


<div class="col-md-12 btn-print">

               <div class="form-group">
          <label class="control-label col-lg-3" for="price">nombre producto</label><br>
          <div class="input-group col-md-8">
            <input type="text" class="form-control" id="price" name="nombre_pro" value="<?php echo $row['nombre_pro'];?>" required>
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
          <label class="control-label col-lg-3" for="name">precio_venta </label>
          <div class="input-group col-md-8">
            <input type="text" class="form-control" id="precio_venta" name="precio_venta" value="<?php echo $row['precio_venta'];?>" required>
          </div>
        </div>
        </div>
<div class="col-md-12 btn-print">

  
       
                <div class="form-group">
          <label class="control-label col-lg-3" for="name">Imagen antigua</label>
          <div class="input-group col-md-8">
   
                <IMG src="subir_prod/<?php echo $row['imagen'];?>" style="height:50PX" />
          </div>
        </div>
      </div>
<div class="col-md-12 btn-print">
                 <div class="form-group">
          <label class="control-label col-lg-3" for="name">Imagen nueva</label>
          <div class="input-group col-md-8">
   
                  <input type="file" class="form-control" id="imagen" name="imagen"  >
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


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
                      if ($tipo=="administrador") {
                    
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


                  <div class="box-header">
                  <h3 class="box-title"> Datos del empresa</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
          
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from empresa ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_empresa=$row['id_empresa'];
?>
 

          

    
        <form class="form-horizontal" method="post" action="empresa_actualizar.php" enctype='multipart/form-data'>

        <div class="form-group">
          <label class="control-label col-lg-3" for="name">Empresa</label>
          <div class="col-lg-9">
            <input type="hidden" class="form-control" id="id" name="id_empresa" value="<?php echo $row['id_empresa'];?>" required>
            <input type="text" class="form-control" id="name" name="empresa" value="<?php echo $row['empresa'];?>" required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">Nit/Ruc</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="price" name="ruc" value="<?php echo $row['ruc'];?>" required>
          </div>
        </div>
        <br>
        <br>
                       <div class="form-group">
          <label class="control-label col-lg-3" for="price">Moneda</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="moneda" name="moneda" value="<?php echo $row['moneda'];?>" required>
          </div>
        </div>
        <br>
        <br>
                               <div class="form-group">
          <label class="control-label col-lg-3" for="price">Simbolo Moneda</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="simbolo_moneda" name="simbolo_moneda" value="<?php echo $row['simbolo_moneda'];?>" required>
          </div>
        </div>
        <br>
        <br>
   <div class="form-group">
          <label class="control-label col-lg-3" for="price">Pago por dia</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="por_dia" name="por_dia" value="<?php echo $row['por_dia'];?>" required>
          </div>
        </div>
        <br>
        <br>
           <div class="form-group">
          <label class="control-label col-lg-3" for="price">Impuesto productos %</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="impuesto_producto" name="impuesto_producto" value="<?php echo $row['impuesto_producto'];?>" required>
          </div>
        </div>
        <br>
        <br>


           <div class="form-group">
          <label class="control-label col-lg-3" for="price">Impuesto planes %</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="impuesto_planes" name="impuesto_planes" value="<?php echo $row['impuesto_planes'];?>" required>
          </div>
        </div>
        <br>
        <br>
           <div class="form-group">
          <label class="control-label col-lg-3" for="price">Impuesto ventas entradas diarias %</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="impuesto_diario" name="impuesto_diario" value="<?php echo $row['impuesto_diario'];?>" required>
          </div>
        </div>
        <br>
        <br>
        <div class="form-group">
                <label class="control-label col-lg-3" for="price">Direccion</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="name" name="direccion" value="<?php echo $row['direccion'];?>" required>
          </div>
        </div>
        <br>
        <br>
              <div class="form-group">
                <label class="control-label col-lg-3" for="price">Correo</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="name" name="correo" value="<?php echo $row['correo'];?>" required>
          </div>
        </div>
        <br>
        <br>
        <div class="form-group">
          <label class="control-label col-lg-3" for="file">Telefono</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="nametele" name="telefono" value="<?php echo $row['telefono'];?>" required>

          </div>
        </div>
                <div class="form-group">
          <label class="control-label col-lg-3" for="name">Descripcion </label>
          <div class="col-lg-9">

              <textarea class="form-control" id="name" name="descripcion" required><?php echo $row['descripcion'];?></textarea>
          </div>
        </div>


  
                <div class="form-group">
          <label class="control-label col-lg-3" for="name">Imagen antigua</label>
          <div class="col-lg-9">
   
                <IMG src="images/<?php echo $row['imagen'];?>" style="height:200PX" />
          </div>
        </div>


                 <div class="form-group">
          <label class="control-label col-lg-3" for="name">Imagen nueva</label>
          <div class="col-lg-9">
   
                  <input type="file" class="form-control" id="imagen" name="imagen"  >
          </div>


        </div>
              

                      <div class="form-group">
          <label class="control-label col-lg-3" for="name">Actualizar</label>
          <div class="col-lg-9">
   
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
              
          </div>


        </div>

          
        </form>


<?php 
}?>
          
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
            Sistema de pedidos <a href="#"></a>
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

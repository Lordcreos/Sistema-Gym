
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
 <!--end of modal-->
 

          <div class="col-md-6 btn-print">
 <form method="post" action="permisos.php" enctype="multipart/form-data" >
            <div class="form-group">
                 <button class="btn btn-lg btn-primary btn-print" id="daterange-btn"  name="buscar_tipo">BUSCAR TIPO</button>
     
                     
                      </div>
                         <div class="col-md-12 btn-print"">
                   <div class="form-group">
               <br> <label class="control-label col-lg-3" for="price">Tipo</label><br>
         
            <select class="form-control select2" name="id_tipo" required>

                <?php

              $queryc=mysqli_query($con,"select * from tipo_usuario")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                  <option value="<?php echo $rowc['id'];?>"><?php echo $rowc['nombre'];?></option>
                <?php }?>
              </select>
                       </div>
                   </div>
                      </form>
                    </div>


                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="actualizar_permisos.php" enctype="multipart/form-data" class="form-horizontal">

      


<?php
//gastos
  $id_tipo = $_POST['id_tipo'];


    $query=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='1'")or die(mysqli_error());

    while($row=mysqli_fetch_array($query)){
    $gastos1=$row['estado'];
 }
 //ingresos
    $query2=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='2'")or die(mysqli_error());
   
    while($row2=mysqli_fetch_array($query2)){
    $ingresos1=$row2['estado'];
 }
  //cat_gastos
    $query3=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='3'")or die(mysqli_error());
   
    while($row3=mysqli_fetch_array($query3)){
    $cat_gastos1=$row3['estado'];
 }
   //cat_ingresos
    $query4=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='4'")or die(mysqli_error());
    
    while($row4=mysqli_fetch_array($query4)){
    $cat_ingresos1=$row4['estado'];
 }
    //usuario
    $query5=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='5'")or die(mysqli_error());
    
    while($row5=mysqli_fetch_array($query5)){
    $usuario1=$row5['estado'];
 }



     //eliminar
    $query6=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='1'")or die(mysqli_error());
    
    while($row6=mysqli_fetch_array($query6)){
    $eliminar1=$row6['estado'];
 }
    $query7=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='2'")or die(mysqli_error());
    
    while($row7=mysqli_fetch_array($query7)){
    $guardar1=$row6['estado'];
 }
  $query8=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='3'")or die(mysqli_error());
    
    while($row8=mysqli_fetch_array($query8)){
    $editar1=$row6['estado'];
 }
   $chec="checked";


?>
      
                      <div class="col-md-4">
          PERMISOS 
                <div class="form-group">
               
              
                  <label  for="name">gastos </label>
                  <?php 
                 if ($gastos1=="no") {
                    $chec="";}
                      ?>
                     <input type="checkbox" name="gastos1" value="gastos" <?php echo $chec; ?>>
       
         <br>
                     <label for="name">ingresos </label>
                   <?php 
                   $chec="checked";
                 if ($ingresos1=="no") {
                    $chec="";}
                      ?>
                    
                    <input type="checkbox" name="ingresos1" value="ingresos" <?php echo $chec; ?>><br>
                  <label  for="name">cat_gastos </label> 
                     <?php 
                   $chec="checked";
                 if ($cat_gastos1=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="cat_gastos1" value="cat_gastos" <?php echo $chec; ?>><br>
                           <label  for="name">cat_ingresos </label> 
                                <?php 
                   $chec="checked";
                 if ($cat_ingresos1=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="cat_ingresos1" value="cat_ingresos" <?php echo $chec; ?>><br>
                             <label  for="name">usuario </label> 
                                               <?php 
                   $chec="checked";
                 if ($usuario1=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="usuario1" value="usuario" <?php echo $chec; ?>><br>
        
                         <button type="submit" class="btn btn-primary">Guardar cambios</button>
            

          </form>
          <a href="<?php  echo "cliente.php";?>"  class="btn btn-primary"  style="height:50%; width:50%; font-size: 12px " role="button">Regresar</a>
             </div>



   





                  <div class="box-header">
        
                </div><!-- /.box-header -->
 

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
            Sistema de taller mecanico <a href="#"></a>
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
  }      # code...
    
?>
    <!-- /gauge.js -->
  </body>
</html>

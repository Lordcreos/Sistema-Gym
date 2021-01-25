
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
                  <option value="<?php echo $rowc['id_tipo'];?>"><?php echo $rowc['nombre'];?></option>
                <?php }?>
              </select>
                       </div>
                   </div>
                      </form>
                  


 <?php

if(isset($_POST['buscar_tipo']))

{
   
  $id_tipo = $_POST['id_tipo'];

    $query=mysqli_query($con,"select * from tipo_usuario  where id_tipo='$id_tipo' ")or die(mysqli_error());
    $count=mysqli_num_rows($query);
          while($row=mysqli_fetch_array($query)){
         $id_tipo=$row['id_tipo'];
 
   }
    if ($count>0)
    {

      echo "<script type='text/javascript'>alert('tipo usuario encontrado!');</script>";


      ?>
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="actualizar_permisos.php" enctype="multipart/form-data" class="form-horizontal">

                  <input type="hidden" class="form-control" id="id_tipo" name="id_tipo" value="<?php echo $id_tipo;?>" required>


<?php
//gastos
    $query=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='1'")or die(mysqli_error());

    while($row=mysqli_fetch_array($query)){
    $gastos=$row['estado'];
 }
 //ingresos
    $query2=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='2'")or die(mysqli_error());
   
    while($row2=mysqli_fetch_array($query2)){
    $ingresos=$row2['estado'];
 }
  //cat_gastos
    $query3=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='3'")or die(mysqli_error());
   
    while($row3=mysqli_fetch_array($query3)){
    $cat_gastos=$row3['estado'];
 }
   //cat_ingresos
    $query4=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='4'")or die(mysqli_error());
    
    while($row4=mysqli_fetch_array($query4)){
    $cat_ingresos=$row4['estado'];
 }
    //usuario
    $query5=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='5'")or die(mysqli_error());
    
    while($row5=mysqli_fetch_array($query5)){
    $usuario=$row5['estado'];
 }
  $query10=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='7'")or die(mysqli_error());
    
    while($row10=mysqli_fetch_array($query10)){
    $deudas=$row10['estado'];
 }


     //eliminar
    $query6=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='1'")or die(mysqli_error());
    
    while($row6=mysqli_fetch_array($query6)){
    $eliminar=$row6['estado'];
 }
    $query7=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='2'")or die(mysqli_error());
    
    while($row7=mysqli_fetch_array($query7)){
    $guardar=$row7['estado'];
 }
  $query8=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='3'")or die(mysqli_error());
    
    while($row8=mysqli_fetch_array($query8)){
    $editar=$row8['estado'];
 }
  $query9=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='4'")or die(mysqli_error());
    
    while($row9=mysqli_fetch_array($query9)){
    $exportar=$row9['estado'];
 }
   $chec="checked";


?>
      
                      <div class="col-md-4">
          PERMISOS 
                <div class="form-group">
               
              
                  <label  for="name">gastos </label>
                  <?php 
                 if ($gastos=="no") {
                    $chec="";}
                      ?>
                     <input type="checkbox" name="gastos" value="gastos" <?php echo $chec; ?>>
       
         <br>
                     <label for="name">ingresos </label>
                   <?php 
                   $chec="checked";
                 if ($ingresos=="no") {
                    $chec="";}
                      ?>
                    
                    <input type="checkbox" name="ingresos" value="ingresos" <?php echo $chec; ?>><br>
                  <label  for="name">categoria gastos </label> 
                     <?php 
                   $chec="checked";
                 if ($cat_gastos=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="cat_gastos" value="cat_gastos" <?php echo $chec; ?>><br>
                           <label  for="name">categoria ingresos </label> 
                                <?php 
                   $chec="checked";
                 if ($cat_ingresos=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="cat_ingresos" value="cat_ingresos" <?php echo $chec; ?>><br>
                             <label  for="name">usuario </label> 
                                               <?php 
                   $chec="checked";
                 if ($usuario=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="usuario" value="usuario" <?php echo $chec; ?>><br>



                                       <label  for="name">docentes </label>
                  <?php 
                 if ($docentes=="no") {
                    $chec="";}
                      ?>
                     <input type="checkbox" name="docentes" value="docentes" <?php echo $chec; ?>>
       
         <br>
                     <label for="name">Deudas alumnos y docentes </label>
                   <?php 
                   $chec="checked";
                 if ($deudas=="no") {
                    $chec="";}
                      ?>
                    
                    <input type="checkbox" name="deudas" value="deudas" <?php echo $chec; ?>><br>
                  <label  for="name">alumnos </label> 
                     <?php 
                   $chec="checked";
                 if ($alumnos=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="alumnos" value="alumnos" <?php echo $chec; ?>><br>
                          

        <h2>PERMISOS BOTONES</h2>
        <label  for="name">eliminar </label> 
                                               <?php 
                   $chec="checked";
                 if ($eliminar=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="eliminar" value="eliminar" <?php echo $chec; ?>><br>
                     <label  for="name">guardar </label> 
                                               <?php 
                   $chec="checked";
                 if ($guardar=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="guardar" value="guardar" <?php echo $chec; ?>><br>
                     

                     <label  for="name">editar </label> 
                                               <?php 
                   $chec="checked";
                 if ($editar=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="editar" value="editar" <?php echo $chec; ?>><br>
                     

                     <label  for="name">Exportar </label> 
                                               <?php 
                   $chec="checked";
                 if ($exportar=="no") {
                    $chec="";}
                      ?>
            
                     <input type="checkbox" name="exportar" value="exportar" <?php echo $chec; ?>><br>

                         <button type="submit" class="btn btn-primary">Guardar cambios</button>
            

          </form>
          <a href="<?php  echo "inicio.php";?>"  class="btn btn-primary"  style="height:50%; width:50%; font-size: 12px " role="button">Regresar</a>
             </div>



   <?php
    }
    }
      else
    {
       echo "<script type='text/javascript'>alert('Selecciona tipo de usuario a modificar!');</script>";
    }

?>

   





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
            APSYSTEM <a href="#"></a>
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

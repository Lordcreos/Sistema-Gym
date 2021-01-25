
<?php include 'header.php';


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


                 <div class="panel-heading">


        </div>
   <?php
     if(isset($_REQUEST['num']))
            {
              $num=$_REQUEST['num'];
            }
            else
            {
            $num=$_POST['num'];
          }


?>
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> REGISTRAR CLIENTE </h3>

                </div><!-- /.box-header -->
                <a class="btn btn-warning btn-print" href="comprobantes_reintegro.php"    style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>
                 
                









                <div class="box-body">
                
         
   <?php


   
$debo=0;
$total=0;
$nombre_socio='';
$placa='';
$nombre='';
$ruc='';
$nro_egreso='';
$nro_ingreso='';
$nro_cheque='';
            $query2=mysqli_query($con,"select * from camiones AS c INNER JOIN comprobante AS t
      ON c.id_camion = t.id_camion  where num='$num' ")or die(mysqli_error());

                      while($row2=mysqli_fetch_array($query2)){
         $nombre_socio=$row2['nombre_socio'];
     $placa=$row2['placa'];
       $id_camion=$row2['id_camion'];
    }
             $query3=mysqli_query($con,"select * from clientes AS c INNER JOIN comprobante AS t
      ON c.id_cliente = t.id_cliente  where num='$num' ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
         $nombre=$row3['nombre'];
     $ruc=$row3['ruc'];

          $id_cliente=$row3['id_cliente'];
    }

             $query4=mysqli_query($con,"select * from comprobante  where num='$num' ")or die(mysqli_error());

                      while($row4=mysqli_fetch_array($query4)){
         $carga=$row4['carga'];
     $origen=$row4['origen'];
          $destino=$row4['destino'];
           $fm =$row4['fm'];
            $fecha=$row4['fecha'];
             $peso_us_tm=$row4['peso_us_tm'];
              $peso_tm=$row4['peso_tm'];
                 $fac_comer=$row4['fac_comer'];

                          $depositado_por=$row4['depositado_por'];
                 $tipo_moneda=$row4['tipo_moneda'];
                 $monto=$row4['monto'];
                  $nro_deposito=$row4['nro_deposito'];
                  $pagado=$row4['pagado'];
                    $nro_egreso=$row4['nro_egreso'];
                      $nro_ingreso=$row4['nro_ingreso'];
                       $nro_cheque=$row4['nro_cheque'];
                            $estado_pagado=$row4['estado_pagado'];

                                   $fecha=$row4['fecha'];
 $tipo_moneda=$row4['tipo_moneda'];

                   
    }
$debo=$monto-$pagado;
      ?>
 
                        
            
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from empresa ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $empresa=$row['empresa'];
    $nit=$row['ruc'];
  }
?>
          
      




        <form class="form-horizontal" method="post" action="comprobante_actualizar.php" enctype='multipart/form-data'>


<input type="hidden" class="form-control" id="num" name="num" value="<?php echo $num;?>" >

 
<input type="hidden" class="form-control" id="id_camion" name="id_camion" value="<?php echo $id_camion;?>" >
<input type="hidden" class="form-control" id="id_cliente" name="id_cliente" value="<?php echo $id_cliente;?>" >
     

                   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Empresa</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="empresa" name="empresa" value="<?php echo $empresa;?>" readonly >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
       
                          <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nit</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="nit" name="nit" value="<?php echo $nit;?>" readonly>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


 <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nombre socio</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="nombre_socio" name="nombre_socio"  value="<?php echo $nombre_socio;?>" readonly>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


 <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Cliente</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="nombre" name="nombre"  value="<?php echo $nombre;?>" readonly>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


 <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Contenedor</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="carga" name="carga"  value="<?php echo $carga;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

           <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Origen</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="origen" name="origen"  value="<?php echo $origen;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                       <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Destino</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="destino" name="destino" value="<?php echo $destino;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>     
                                        <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Fm</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="fm" name="fm"  value="<?php echo $fm;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>   

                                                        <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Numero</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="num" name="num"  value="<?php echo $num;?>" readonly>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>   

                                                                            <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Fecha</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="date" class="form-control pull-right" id="fecha" name="fecha"  value="<?php echo $fecha;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>  


                  <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Peso $us/TM</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="peso_us_tm" name="peso_us_tm"   value="<?php echo $peso_us_tm;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>  

                        <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Peso TM</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="peso_tm" name="peso_tm"   value="<?php echo $peso_tm;?>">
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>  

                           <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Fac. Comer</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="fac_comer" name="fac_comer"  value="<?php echo $fac_comer;?>"  >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div> 

                                 <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Depositado por</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="depositado_por" name="depositado_por"  value="<?php echo $depositado_por;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                               <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Tipo de Moneda</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                         <select class="form-control select2" name="tipo_moneda" required>

         <option value="dolares" <?php if($tipo_moneda=="dolares") {echo "selected"; }?>>Dolares ($us)</option> 
                     <option value="bolivianos" <?php if($tipo_moneda=="bolivianos") {echo "selected"; }?>>Bolivinos (bs)</option> 


       

              </select>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


                                      <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Monto total</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="monto" name="monto"   value="<?php echo $monto;?>">
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


                                      <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nro deposito</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="nro_deposito" name="nro_deposito"   value="<?php echo $nro_deposito;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

                   <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Tipo de deposito</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                         <select class="form-control select2" name="estado_pagado" required>
                     <option value="completo" <?php if($estado_pagado=="completo") {echo "selected"; }?>>Flete completo</option> 
                     <option value="anticipo" <?php if($estado_pagado=="anticipo") {echo "selected"; }?>>Anticipo flete</option> 
                      <option value="reintegro" <?php if($estado_pagado=="reintegro") {echo "selected"; }?>>Reintegro</option> 

             

              </select>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

                                             <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Monto pagado</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="pagado" name="pagado"   value="<?php echo $pagado;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

                    <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nro egreso</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="nro_egreso" name="nro_egreso"  value="<?php echo $nro_egreso;?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>  

                               <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nro ingreso</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="nro_ingreso" name="nro_ingreso"   value="<?php echo $nro_ingreso;?>">
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>      

                                      <div class="row">
  
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nro Cheque</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="nro_cheque" name="nro_cheque"    value="<?php echo $nro_cheque;?>">
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>   

  

            

             

                            
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
              










              <div class="modal-footer">


              </div>
        </form>

 



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
            Sistema de appsystem <a href="#"></a>
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

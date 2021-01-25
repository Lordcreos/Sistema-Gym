
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
       <?php
            $fechaactual = date('Y-m-d');
            ?>


<?php
$session_id=$_SESSION['id'];
$cont=0;
$id_pedido="";
            $query3=mysqli_query($con,"select * from pedidos ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
   $cont=$row3['id_pedido'];
}
  $cont=$cont+1;
  $id_pedido=$cont.$session_id;

?>
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
                 <div class="panel-heading">




                  <div class="box-header">
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
               
                


                








                <div class="box-body">
                
         

 
                        
            

          
      






      
 <!--end of modal-->





   <?php
$cliente=0;
            $query6=mysqli_query($con,"select * from temporal_productos  where id_temporal='1' ")or die(mysqli_error());

                      while($row6=mysqli_fetch_array($query6)){

     $cliente=$row6['cliente'];

    }
   

$precio='';
$nombre='';
$dni='';


             $query3=mysqli_query($con,"select * from clientes where id_cliente='$cliente' ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
         $nombre=$row3['nombre'];
     $dni=$row3['dni'];
    }

      ?>
            <table class="table table-bordered table-striped">
                    <thead>
                      <tr>


                 <th>Nombre cliente</th>
                        <th>Dni</th>
  
                        
                      
                      </tr>
                    </thead>
                    <tbody>
             <tr >
              <td><?php echo $nombre;?></td>

                        <td><?php echo $dni;?></td>

              </tr>
                   </tbody>

                  </table>          

   <?php



?>

              




                <div class="box-body">

                  
                  <form method="post" action="ventas_add.php" enctype="multipart/form-data" class="form-horizontal">
         <button type="submit" class="btn btn-primary">REGISTRAR </button>



                     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group"></div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
 
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >NÚMERO DE PEDIDO</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
  <input type="text" class="form-control pull-right"  value="<?php echo $id_pedido;?>" id="date"   disabled required>
                          <input type="hidden" class="form-control pull-right" name="num_pedido" value="<?php echo $id_pedido;?>" id="date"    required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >FECHA</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                    <input type="date" class="form-control" id="ffcontrato" name="fecha" value="<?php echo $fechaactual;?>"  readonly="readonly">
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>



   


          </form>
                     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group"></div><!-- /.form group -->

                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
             <button type="button" class="btn btn-danger btn-lg btn-print" data-toggle="modal" data-target="#miModal">
  AGREGAR PRODUCTO
</button>
<br>

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
                     <div class="row">

                       <div class="col-md-6 btn-print">
                      <div class="form-group">

                                <div class="box-body">
<form>
                      Busqueda: <input id="txtBusqueda_servicios" type="text" onkeyup="Buscar();" />

</form>















<table class="table table-striped" id="table_servicios">
   <thead>
                               <th>nombre</th>

                        <th>descripcion</th>

             
                        <th> valor </th>
   </thead>
   <tbody>
                         <?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from producto where stock>'0' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
  

  
?>
       <form action="ventas_temporal_add.php" method="post">
        <input type="hidden" name="id_pedido" value="<?php echo $id_pedido; ?>">
         <tr>
                              <td><?php echo $row['nombre_pro'];?></td>

                        <td><?php echo $row['descripcion'];?></td>
                
                        <td><?php echo $row['precio_venta'];?></td>
                            <td>    <input name="cantidad" type="text" id="cantidad" placeholder="cantidad" style="width: : 100%;" onkeypress='return event.charCode >= 48 && event.charCode <= 57' ></td>
          <input type="hidden" name="id_producto" value="<?php echo $row['id_pro']; ?>">

            <td><input type="submit" class="btn btn-primary btn-sm" name="seleccionar_producto" value="Seleccionar"></td>
        </form>
<?php 

}


?>
    </tr>
  </tbody>
</table>





<script type="text/javascript">// < ![CDATA[
function Eliminar (i) {
    document.getElementsByTagName("table")[0].setAttribute("id","tableid");
    document.getElementById("tableid").deleteRow(i);
}
function Buscar() {
            var tabla = document.getElementById('table_servicios');
            var busqueda = document.getElementById('txtBusqueda_servicios').value.toLowerCase();
            var cellsOfRow="";
            var found=false;
            var compareWith="";
            for (var i = 1; i < tabla.rows.length; i++) {
                cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                found = false;
                for (var j = 0; j < cellsOfRow.length && !found; j++) { compareWith = cellsOfRow[j].innerHTML.toLowerCase(); if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1))
                    {
                        found = true;
                    }
                }
                if(found)
                {
                    tabla.rows[i].style.display = '';
                } else {
                    tabla.rows[i].style.display = 'none';
                }
            }
        }
// ]]></script>



          </div>
                      


                      </div>
                    </div>
                          
                    </div>
                      
      </div>
   
    </div>
  </div>
</div>






<br>





        </div>
 
 <!--end of modal-->

        </div>
 
 <!--end of modal-->
                    </div>


                       <div class="row">
                    <div class="col-md-6 btn-print">


                  <div class="box-header">
                  <h3 class="box-title">SELECCIONE CLIENTE</h3>
                </div><!-- /.box-header -->

                 <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                    <th>#</th>
                        
                        <th>Nombre</th>
                        <th>Ruc</th>
            
                        <th>Dni</th>        

                 
 <th class="btn-print"> Accion </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from clientes ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $id_cliente=$row['id_cliente'];
    $i++;
?>
                      <tr >

<td><?php echo $i;?></td>

              <td><?php echo $row['nombre'];?></td>
<td><?php echo $row['ruc'];?></td>

  <td><?php echo $row['dni'];?></td>                      

     
                          <td>
                                 <?php
                   
                    
                      ?>
 
<a class="btn btn-danger btn-print" href="<?php  echo "temporal_add_cliente_productos.php?id_cliente=$id_cliente";?>"  role="button">SELECCIONAR</a>
             <?php
            //          }
                      ?>

            </td>
                      </tr>

 <!--end of modal-->

<?php }?>
                    </tbody>

                  </table>


                    </div>

                       <div class="col-md-5 btn-print">


                  <div class="box-header">
                  <h3 class="box-title">Producto agregados en tu carrito de compras</h3>
                </div><!-- /.box-header -->
    



                                       <table id="example_plan" class="table table-bordered table-striped">
                    <thead>
                      <tr>

           
                        

                     <th> IMAGEN </th> 
                        <th>NOMBRE</th>
                        <th> DESCRIPCION</th>
                  

                          


                      <th> CANTIDAD</th>
                           <th> PRECIO UNIT</th>
                       
                              <th> PRECIO TOTAL</th>
          
                   
                       <th class="btn-print"> ACCIÓN </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from producto AS p
INNER JOIN temporal_pedido AS t
    ON p.id_pro = t.id_producto  where id_pedido='$id_pedido' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $cid=$row['id_pro'];
    $id_pro=$row['id_pro'];
        $id_temporal=$row['id_temporal'];
               $cantidad=$row['cantidad'];
        $precio_venta=$row['precio_venta'];
           $precio = (float) $precio_venta;
?>
                      <tr >



                         <td><IMG src="subir_prod/<?php echo $row['imagen'];?>" style="height:50PX" /></td>
              <td><?php echo $row['nombre_pro'];?></td>
                        <td><?php echo $row['descripcion'];?></td>
                               <td><?php echo $row['cantidad'];?></td>
                        
<td><?php echo $row['precio_venta'];?></td>
<td><?php echo number_format($precio_venta*$cantidad,2);?></td>
     
                          <td>
                                 <?php
                   
                    
                      ?>
 
<a class="small-box-footer btn-print" href="<?php  echo "eliminar_temporal_pedidos.php?id_temporal=$id_temporal";?>" onClick="return confirm('¿Está seguro de que desea eliminar este producto??');"" > <i class="glyphicon glyphicon-remove"></i></a>


            <a href="#updateordinance<?php echo $row['id_temporal'];?>" data-target="#updateordinance<?php echo $row['id_temporal'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer btn-print"><i class="glyphicon glyphicon-edit text-blue"></i></a>
             <?php
            //          }
                      ?>

            </td>
                      </tr>

<div id="updateordinance<?php echo $row['id_temporal'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" ">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">MODIFICAR</h4>
              </div>
              <div class="modal-body" style="width: 50%; height: 100%;">
        <form class="form-horizontal" method="post" action="actualizar_temporal_pedidos.php" enctype='multipart/form-data'>

            <input type="hidden" class="form-control" id="id_temporal" name="id_temporal" value="<?php echo $row['id_temporal'];?>" required>
      








                                  <div class="col-md-12 btn-print">
               <div class="form-group">
          <label class="control-label col-lg-3" for="name">Cantidad </label>
          <div class="input-group col-md-8">
            <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $row['cantidad'];?>" required>
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

 <!--end of modal-->

<?php 
}?>
                    </tbody>

                  </table>

                    </div>

                    </div>
                
 
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
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>

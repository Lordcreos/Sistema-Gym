
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
                  //    if ($perfil=="tienda") {
                    
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

.zoomIt{
display:block!important;
-webkit-transition:-webkit-transform 1s ease-out;
-moz-transition:-moz-transform 1s ease-out;
-o-transition:-o-transform 1s ease-out;
-ms-transition:-ms-transform 1s ease-out;
transition:transform 1s ease-out;
}
.zoomIt:hover{
-moz-transform: scale(5.20);
-webkit-transform: scale(5.20);
-o-transform: scale(5.20);
-ms-transform: scale(5.20);
transform: scale(5.20)
}
       </style>
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
        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>




                 <div class="panel-heading">

  <button type="button" class="btn btn-danger btn-lg btn-print" data-toggle="modal" data-target="#miModal">
  AGREGAR PRODUCTO
</button>
<br>

<div class="modal fade" id="miModalservicios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
    $query=mysqli_query($con,"select * from producto where tipo='servicios' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
  

  
?>
       <form action="ventas_temporal_add.php" method="post">
        <input type="hidden" name="id_pedido" value="<?php echo $id_pedido; ?>">
         <tr>
                              <td><?php echo $row['nombre_pro'];?></td>

                        <td><?php echo $row['descripcion'];?></td>
                
                        <td><?php echo $row['precio_venta'];?></td>
                            <td>    <input name="cantidad" type="text" id="cantidad" placeholder="cantidad" style="width: : 100%;"  ></td>
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

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
                     <div class="row">

                       <div class="col-md-6 btn-print">
                      <div class="form-group">

                                <div class="box-body">
<form>
                      Busqueda: <input id="txtBusqueda" type="text" onkeyup="Buscar();" />

</form>















<table class="table table-striped">
   <thead>
                               <th>nombre</th>

                        <th>descripcion</th>

                   <th> unidad </th>
                        <th> valor </th>
   </thead>
   <tbody>
                         <?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from producto where tipo='productos' and stock>'0' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
  

  
?>
       <form action="ventas_temporal_add.php" method="post">
        <input type="hidden" name="id_pedido" value="<?php echo $id_pedido; ?>">
         <tr>
                              <td><?php echo $row['nombre_pro'];?></td>

                        <td><?php echo $row['descripcion'];?></td>
                         <td><?php echo $row['unidad'];?></td>
                        <td><?php echo $row['precio_venta'];?></td>
                            <td>    <input name="cantidad" type="text"  id="cantidad" placeholder="cantidad" style="width: : 100%;" ></td>
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
            var tabla = document.getElementById('example2');
            var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
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




        </div>
 
 <!--end of modal-->



                        <div class="box-body">
                  <!-- Date range -->
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


<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >SELECDCIONE CLIENTE</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                            <select class="form-control select2" name="id_cliente" required>
                            
                            <?php

              $queryc=mysqli_query($con,"select * from usuario where tipo='cliente' ")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                            <option value="<?php echo $rowc['id'];?>"><?php echo $rowc['nombre'];?></option>
                            <?php }?>
                          </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

   


          </form>

              
          </div>

                  <div class="box-header">
                  <h3 class="box-title"> LISTA DE PRODUCTOS </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example3" class="table table-bordered table-striped">
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

    $query=mysqli_query($con,"select * from producto AS p
INNER JOIN temporal_pedido AS t
    ON p.id_pro = t.id_producto  where id_pedido='$id_pedido' ")or die(mysqli_error());
    $i=1;
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



<a class="small-box-footer btn-print" href="<?php  echo "eliminar_temporal_pedidos.php?id_temporal=$id_temporal";?>" onClick="return confirm('¿Está seguro de que desea eliminar este producto??');"" > <i class="glyphicon glyphicon-remove"></i></a>


            <a href="#updateordinance<?php echo $row['id_temporal'];?>" data-target="#updateordinance<?php echo $row['id_temporal'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer btn-print"><i class="glyphicon glyphicon-edit text-blue"></i></a>
          


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
          <div class="pull-right"><span class="clearfix"></span></div>
          <div class="clearfix"><span class="pull-right">SISTEMA DE PELUQUERIA<a href="#"></a>:</span></div>
        </footer>
        <!-- /footer content -->
      </div>
      
    </div>

  <?php include 'datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example3').dataTable( {
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

                }

              );
              } );


    
    </script>

            <?php
                 //     }
                      ?>

    <!-- /gauge.js -->
  </body>
</html>

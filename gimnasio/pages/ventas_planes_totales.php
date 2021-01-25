
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
                  <!-- Date range -->  <section class="content-header">
             
          </section>

 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>

<form>
                      Busqueda: <input id="txtBusqueda" type="text" onkeyup="Buscar();" />

</form>
                  <div class="box-header">
                  <h3 class="box-title"> LISTA MEMBRESIAS</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
  <table id="example22" class="table table-bordered table-striped">
                   <thead>
                            <tr>
                                 <th>Codigo</th>
    <th>Nombre cliente</th>
                        <th>Dni</th>
                        <th>En meses/dias </th>
                     
                       
                          <th>Numero de meses/dias </th>
                           <th>Fecha inicio </th>
                           <th>Fecha fin</th>
                  <th class="btn-print"> ACCION </th>

                      </tr>
                    </thead>
                    <tbody>
                   




<?php


 $fechaActual = date('Y-m-d');



?>

   <?php
 
    $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente  ")or die(mysqli_error());
    $contador=0;
    while($row=mysqli_fetch_array($query)){
$contador++;
    }

?>

  <div class = "row">
        <div class = "col-md-4 col-lg-12 hide-section">
  <a class="btn btn-danger btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Nro ELEMENTOS= <label style='color:black;  font-size: 25px '>=<?php echo $contador;?></label></a>



</div>

      
</div>

 <?php







    $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente ORDER BY id_plan_cliente DESC  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
   $codigo=$row['codigo'];
      $id_plan_cliente=$row['id_plan_cliente'];
?>

                      <tr >
                        <td><?php echo $row['codigo'];?></td>
                                           <td><?php echo $row['nombre'];?></td>
<td><?php echo $row['dni'];?></td>
              <td><?php echo $row['tipo_tiempo'];?></td>
              
                        <td><?php echo $row['numero_tiempo'];?></td>
                             <td><?php echo $row['fecha_inicio'];?></td>
                              <td><?php echo $row['fecha_fin'];?></td>
                                                      <td>
                                 <?php
                   
                    
                      ?>
<a class="btn btn-danger btn-print" href="<?php  echo "generar_carnet_plan.php?codigo=$codigo";?>"     role="button">Ver comprobante</a>


             <?php
            //          }
                      ?>

            </td>
                      </tr>

                                          <?php
                      }
                    
?>


 <!--end of modal-->

                    </tbody>
         



               <script type="text/javascript">// < ![CDATA[
function Eliminar (i) {
    document.getElementsByTagName("table")[0].setAttribute("id","tableid");
    document.getElementById("tableid").deleteRow(i);
}
function Buscar() {
            var tabla = document.getElementById('example22');
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




        <footer>

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
  </body>
</html>

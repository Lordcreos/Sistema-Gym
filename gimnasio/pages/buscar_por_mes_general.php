
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
  <?php


  $suma_total=0;
  $id_tipo = $_POST['id_tipo'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
$monto=0;
  $imagen="";




          $query=mysqli_query($con,"select * from tipo_descuentos   AS t  
INNER JOIN descuentos AS d 
    ON d.id_tipo = t.id_tipo INNER JOIN comprobante AS c
    ON d.numero_id = c.num  where   t.id_tipo=$id_tipo and MONTH(fecha)='$mes' and YEAR(fecha)='$anio' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
$monto=$row['monto_des'];
 $mon = floatval($monto);
 

 $suma_total = floatval($mon+$suma_total);



    }



$mes_m = DateTime::createFromFormat('!m', $mes);
$mes_letras = $mes_m->format('F'); // March

?>



  <div class = "row">

<H1> FECHA: <?php echo $mes;?> / <?php echo $anio;?></H1>

  <div class = "row">
        <div class = "col-md-4 col-lg-12 hide-section">
  <a class="btn btn-danger btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">SUMA TOTAL= <label style='color:black;  font-size: 25px '>=<?php echo $suma_total;?></label></a>



</div>

      
</div>

  <div class = "col-md-2 ">
              <div class="box-header">

                </div>

</div>
   <div class = "col-md-3 ">
<a href="<?php  echo "descuento_general.php";?>" class="btn btn-primary btn-print"  style=" font-size: 12px " role="button">Regresar</a>
                          <a class = "btn btn-success btn-print" href = "descuento_general.php" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>

</div>    
</div>
 <!--end of modal-->

                        <div class="box-body">
                  <!-- Date range -->  <section class="content-header">
             
          </section>




                  <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
   
         






                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
<th> Numero comprobante </th>
<th> Fecha </th>
       <th> Descripcion </th>
                          


                           <th> Monto</th> 
                    

                  
                      </tr>
                    </thead>
                    <tbody>
<?php
    $query=mysqli_query($con,"select * from tipo_descuentos  AS t
INNER JOIN descuentos AS d
    ON d.id_tipo = t.id_tipo INNER JOIN comprobante AS c
    ON c.num = d.numero_id  where t.id_tipo=$id_tipo and MONTH(fecha)='$mes' and YEAR(fecha)='$anio' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_descuentos=$row['id_descuentos'];
?>
                      <tr >
 <td><?php echo $row['num'];?></td>
  <td><?php echo $row['fecha'];?></td>
           <td><?php echo $row['nombre_tipo'];?></td>

                        <td><?php echo $row['monto_des'];?></td>
     
                         
                                 <?php
                   
                    
                      ?>


    

             <?php
            //          }
                      ?>

          
                      </tr>

 <!--end of modal-->

<?php }?>
                    </tbody>

                  </table>


        <footer>

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include 'datatable_script.php';?>
    <!-- /gauge.js -->



          <script>
        $(document).ready( function() {
                $('#example1').dataTable( {
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


                }

              );
              } );
    </script>
  </body>
</html>

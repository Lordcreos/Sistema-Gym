
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
//    if ($docentes=="si") {
      # code...
    
?>
    <div class="container body">
      <div class="main_container">
        <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>      <!-- /top navigation -->


    <style>
        .caja{
            margin: auto;
            max-width: 250px;
            padding: 20px;
            border: 1px solid #BDBDBD;
        }
        .caja select{
            width: 100%;
            font-size: 16px;
            padding: 5px;
        }
        .resultados{
            margin: auto;
            margin-top: 40px;
            width: 1000px;
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




 <div class="container">
        
       </div>

                        <div class="box-body">
                     
                                                                        <a class = "btn btn-success btn-print" href = "consolidado_docentes.php"   onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>
          

                          <?php



  $cantidad_enero=0;
    $cantidad_febrero=0;
      $cantidad_marzo=0;
        $cantidad_abril=0;
          $cantidad_mayo=0;
            $cantidad_junio=0;
            $cantidad_julio=0;
              $cantidad_agosto=0;
                $cantidad_setiembre=0;
                  $cantidad_octubre=0;
                    $cantidad_noviembre=0;
                      $cantidad_diciembre=0;

  $year = date("Y");

  $enero_inicio=$year."-01-01";
    $enero_fin=$year."-01-31";
  $febrero_inicio=$year."-02-01";
    $febrero_fin=$year."-02-28";
  $marzo_inicio=$year."-03-01";
    $marzo_fin=$year."-03-31";
      $abril_inicio=$year."-04-01";
    $abril_fin=$year."-04-30";
          $mayo_inicio=$year."-05-01";
    $mayo_fin=$year."-05-31";
          $junio_inicio=$year."-06-01";
    $junio_fin=$year."-06-30";
              $julio_inicio=$year."-07-01";
    $juio_fin=$year."-07-31";
            $agosto_inicio=$year."-08-01";
    $agosto_fin=$year."-08-31";
                $setiembre_inicio=$year."-09-01";
    $setiembre_fin=$year."-09-30";
                    $octubre_inicio=$year."-10-01";
    $octubre_fin=$year."-10-31";
      $noviembre_inicio=$year."-11-01";
    $noviembre_fin=$year."-11-30";
      $diciembre_inicio=$year."-12-01";
    $diciembre_fin=$year."-12-31";




?>
  <?php

      $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$enero_inicio' and fecha_inicio <='$enero_fin' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $cantidad_enero=$row['precio']+$cantidad_enero;
      }







$query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$febrero_inicio' and fecha_inicio <='$febrero_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
     $cantidad_febrero=$row['precio']+$cantidad_febrero;
      }

      $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$marzo_inicio' and fecha_inicio <='$marzo_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
             $cantidad_marzo=$row['precio']+$cantidad_marzo;

      }

            $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$abril_inicio' and fecha_inicio <='$abril_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
            $cantidad_abril=$row['precio']+$cantidad_abril;
      $cantidad_abril++;
      }
     
           $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$mayo_inicio' and fecha_inicio <='$mayo_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
            $cantidad_mayo=$row['precio']+$cantidad_mayo;

      }

          $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$junio_inicio' and fecha_inicio <='$junio_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
                 $cantidad_junio=$row['precio']+$cantidad_junio;

      }

         $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$julio_inicio' and fecha_inicio <='$juio_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
         $cantidad_julio=$row['precio']+$cantidad_julio;

      }

        $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$agosto_inicio' and fecha_inicio <='$agosto_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
        $cantidad_agosto=$row['precio']+$cantidad_agosto;
 
      }
              $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$setiembre_inicio' and fecha_inicio <='$setiembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
           $cantidad_setiembre=$row['precio']+$cantidad_setiembre;

      }

             $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$octubre_inicio' and fecha_inicio <='$octubre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
            $cantidad_octubre=$row['precio']+$cantidad_octubre;
 
      }

            $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$noviembre_inicio' and fecha_inicio <='$noviembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
         $cantidad_noviembre=$row['precio']+$cantidad_noviembre;

      }

           $query=mysqli_query($con,"select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   where fecha_inicio >='$diciembre_inicio' and fecha_inicio <='$diciembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
         $cantidad_diciembre=$row['precio']+$cantidad_diciembre;

      }
 





  $cantidad_enero_productos=0;
    $cantidad_febrero_productos=0;
      $cantidad_marzo_productos=0;
        $cantidad_abril_productos=0;
          $cantidad_mayo_productos=0;
            $cantidad_junio_productos=0;
            $cantidad_julio_productos=0;
              $cantidad_agosto_productos=0;
                $cantidad_setiembre_productos=0;
                  $cantidad_octubre_productos=0;
                    $cantidad_noviembre_productos=0;
                      $cantidad_diciembre_productos=0;

      $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto   where fecha >='$enero_inicio' and fecha <='$enero_fin' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $cantidad_enero_productos=$row['precio_venta']+$cantidad_enero_productos;
      }







$query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto    where fecha >='$febrero_inicio' and fecha <='$febrero_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
     $cantidad_febrero=$row['precio_venta']+$cantidad_febrero;
      }

      $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto    where fecha >='$marzo_inicio' and fecha <='$marzo_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
             $cantidad_marzo=$row['precio_venta']+$cantidad_marzo;

      }

            $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto   where fecha >='$abril_inicio' and fecha <='$abril_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
            $cantidad_abril=$row['precio_venta']+$cantidad_abril;

      }
     
           $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto   where fecha >='$mayo_inicio' and fecha <='$mayo_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
            $cantidad_mayo=$row['precio_venta']+$cantidad_mayo;

      }

          $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto   where fecha >='$junio_inicio' and fecha <='$junio_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){

        $cantidad_junio=$row['precio_venta']+$cantidad_junio;
      }

         $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto    where fecha >='$julio_inicio' and fecha <='$juio_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
         $cantidad_julio=$row['precio_venta']+$cantidad_julio;

      }

        $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto   where fecha >='$agosto_inicio' and fecha <='$agosto_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
        $cantidad_agosto=$row['precio_venta']+$cantidad_agosto;
 
      }
              $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto   where fecha >='$setiembre_inicio' and fecha <='$setiembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
           $cantidad_setiembre=$row['precio_venta']+$cantidad_setiembre;

      }

             $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto    where fecha >='$octubre_inicio' and fecha <='$octubre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
            $cantidad_octubre=$row['precio_venta']+$cantidad_octubre;
 
      }

            $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto   where fecha >='$noviembre_inicio' and fecha <='$noviembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
         $cantidad_noviembre=$row['precio_venta']+$cantidad_noviembre;

      }

           $query=mysqli_query($con,"select * from pedidos AS p INNER JOIN detalles_pedido AS z
      ON p.num_pedido = z.id_pedido INNER JOIN producto AS c
      ON c.id_pro = z.id_producto    where fecha >='$diciembre_inicio' and fecha <='$diciembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
         $cantidad_diciembre=$row['precio_venta']+$cantidad_diciembre;

      }
 










    $query=mysqli_query($con,"select * from empresa ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $por_dia=$row['por_dia'];
  }


  $cantidad_enero_diario=0;
    $cantidad_febrero_diario=0;
      $cantidad_marzo_diario=0;
        $cantidad_abril_diario=0;
          $cantidad_mayo_diario=0;
            $cantidad_junio_diario=0;
            $cantidad_julio_diario=0;
              $cantidad_agosto_diario=0;
                $cantidad_setiembre_diario=0;
                  $cantidad_octubre_diario=0;
                    $cantidad_noviembre_diario=0;
                      $cantidad_diciembre_diario=0;

      $query=mysqli_query($con,"select * from venta_diaria where fecha >='$enero_inicio' and fecha <='$enero_fin' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $cantidad_enero_diario=$por_dia+$cantidad_enero_diario;
      }







$query=mysqli_query($con,"select * from venta_diaria  where fecha >='$febrero_inicio' and fecha <='$febrero_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $cantidad_febrero_diario=$por_dia+$cantidad_febrero_diario;
      }

      $query=mysqli_query($con,"select * from venta_diaria where fecha >='$marzo_inicio' and fecha <='$marzo_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
          $cantidad_marzo_diario=$por_dia+$cantidad_marzo_diario;

      }

            $query=mysqli_query($con,"select * from venta_diaria where fecha >='$abril_inicio' and fecha <='$abril_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
    $cantidad_abril_diario=$por_dia+$cantidad_abril_diario;
      }
     
           $query=mysqli_query($con,"select * from venta_diaria where fecha >='$mayo_inicio' and fecha <='$mayo_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $cantidad_mayo_diario=$por_dia+$cantidad_mayo_diario;

      }

          $query=mysqli_query($con,"select * from venta_diaria  where fecha >='$junio_inicio' and fecha <='$junio_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){

     $cantidad_junio_diario=$por_dia+$cantidad_junio_diario;
      }

         $query=mysqli_query($con,"select * from venta_diaria  where fecha >='$julio_inicio' and fecha <='$juio_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
       $cantidad_julio_diario=$por_dia+$cantidad_julio_diario;

      }

        $query=mysqli_query($con,"select * from venta_diaria  where fecha >='$agosto_inicio' and fecha <='$agosto_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
     $cantidad_agosto_diario=$por_dia+$cantidad_agosto_diario;
 
      }
              $query=mysqli_query($con,"select * from venta_diaria where fecha >='$setiembre_inicio' and fecha <='$setiembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
       $cantidad_setiembre_diario=$por_dia+$cantidad_setiembre_diario;

      }

             $query=mysqli_query($con,"select * from venta_diaria  where fecha >='$octubre_inicio' and fecha <='$octubre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
           $cantidad_octubre_diario=$por_dia+$cantidad_octubre_diario;
 
      }

            $query=mysqli_query($con,"select * from venta_diaria where fecha >='$noviembre_inicio' and fecha <='$noviembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
     $cantidad_noviembre_diario=$por_dia+$cantidad_noviembre_diario;

      }

           $query=mysqli_query($con,"select * from venta_diaria  where fecha >='$diciembre_inicio' and fecha <='$diciembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $cantidad_diciembre_diario=$por_dia+$cantidad_diciembre_diario;

      }
 


  $cantidad_enero_total=0;
    $cantidad_febrero_total=0;
      $cantidad_marzo_total=0;
        $cantidad_abril_total=0;
          $cantidad_mayo_total=0;
            $cantidad_junio_total=0;
            $cantidad_julio_total=0;
              $cantidad_agosto_total=0;
                $cantidad_setiembre_total=0;
                  $cantidad_octubre_total=0;
                    $cantidad_noviembre_total=0;
                      $cantidad_diciembre_total=0;


            
            $cantidad_enero_total=$cantidad_enero+$cantidad_enero_productos+$cantidad_enero_diario;
             $cantidad_febrero_total=$cantidad_febrero+$cantidad_febrero_productos+$cantidad_febrero_diario; 
                          $cantidad_marzo_total=$cantidad_marzo+$cantidad_marzo_productos+$cantidad_marzo_diario;
                                                    $cantidad_abril_total=$cantidad_abril+$cantidad_abril_productos+$cantidad_abril_diario;


          $cantidad_mayo_total=$cantidad_mayo+$cantidad_mayo_productos+$cantidad_mayo_diario;
          $cantidad_junio_total=$cantidad_junio+$cantidad_junio_productos+$cantidad_junio_diario;
          $cantidad_julio_total=$cantidad_julio+$cantidad_julio_productos+$cantidad_julio_diario;

          $cantidad_agosto_total=$cantidad_agosto+$cantidad_agosto_productos+$cantidad_agosto_diario;
          $cantidad_setiembre_total=$cantidad_setiembre+$cantidad_setiembre_productos+$cantidad_setiembre_diario;
          $cantidad_octubre_total=$cantidad_octubre+$cantidad_octubre_productos+$cantidad_octubre_diario;

          $cantidad_noviembre_total=$cantidad_noviembre+$cantidad_noviembre_productos+$cantidad_noviembre_diario;
          $cantidad_diciembre_total=$cantidad_diciembre+$cantidad_diciembre_productos+$cantidad_diciembre_diario;          
  ?>



    <?php


  ?>   
                  <!-- Date range -->
                <CENTER>  <h1>GANANCIAS DEL AÑO</h1></CENTER>
        <div class="caja">

          <label>año: </label>
          <input type="text" value="<?php echo $year?>" onChange="mostrarResultados(<?php echo $year?>);" readonly><br>
   
        </div>
        <div class="resultados"><canvas id="grafico"></canvas></div>




          </div>
     
 <!--end of modal-->


                  <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
                

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
            gimnacio tusolutionweb <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script>
            $(document).ready(mostrarResultados(2019));  
            var gastos = "<?php echo '';?>";

                function mostrarResultados(year){
                    $('.resultados').html('<canvas id="grafico"></canvas>');
                    $.ajax({
                        type: 'POST',
                        url: 'php/procesar.php',
                        data: 'year='+year,
                        dataType: 'JSON',
                        success:function(response){
                            var Datos = {
                                    labels : ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'],
                                    datasets : [
                                        {
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                 data : ["<?php echo round($cantidad_enero);?>", "<?php echo round($cantidad_febrero);?>", "<?php echo round($cantidad_marzo);?>", "<?php echo round($cantidad_abril);?>", "<?php echo round($cantidad_mayo);?>", "<?php echo round($cantidad_junio);?>", "<?php echo round($cantidad_julio);?>", "<?php echo round($cantidad_agosto);?>", "<?php echo round($cantidad_setiembre);?>", "<?php echo round($cantidad_octubre);?>", "<?php echo round($cantidad_noviembre);?>", "<?php echo round($cantidad_diciembre);?>"]
                                        }
                                    ]
                                }
                            var contexto = document.getElementById('grafico').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                            Barra.clear();
                        }
                    });
                    return false;
                }
    </script>

              <?php 
// }
      # code...
    
?>
    <!-- /gauge.js -->
  </body>
</html>

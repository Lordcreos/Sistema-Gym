
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

          </div>

                  <div class="box-header">
                  <h3 class="box-title"> MENU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">











                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
      
      <h4>
<?php
$num=0;
$select = mysqli_query($con, "SELECT * FROM caja ") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
      </h4>
              <p>Caja</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/ass.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="caja.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>







       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      <h4>
<?php
$num=0;
    $query=mysqli_query($con,"select * from producto ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Productos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/fair.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="productos.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>





                                   <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>
<?php
$num=0;
$select = mysqli_query($con, "SELECT * FROM usuario ") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
      </h4>
              <p>usuarios</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/comittee.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="usuario.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>

        
                                 <?php
                      }
                      ?>


                                   <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
      
      <h4>
<?php
$num=1;
echo $num;
?>
      </h4>
              <p>Configuracion empresa</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/setting.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="configuracion.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>

        
                                 <?php
                      }
                      ?>


 
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php
$num=0;
    $query=mysqli_query($con,"select * from planes ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Planes</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/fair.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="planes.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>





       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
      
      <h4>
<?php
$num=0;
$select = mysqli_query($con, "SELECT * FROM clientes ") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
      </h4>
              <p>Clientes</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/school.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="cliente.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>



       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
      
      <h4>
<?php
$num=1;
$select = mysqli_query($con, "SELECT * FROM plan_cliente ") or die (mysqli_error($link));

echo $num;
?>
      </h4>
              <p>REGISTRO ENTRADA MEMBRECIA</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/fair.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="ventas_planes_lista.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      <h4>
<?php

$num=1;
    $query=mysqli_query($con,"select * from pedidos ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Ventas productos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/fair.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="ventas.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>





















                  </div><!--row-->
                  
      
  
   
            </div><!-- /.col (right) -->



                          <div class="box-body">
                  <div class="row">
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
      
      <h4>
<?php

$num=1;
    $query=mysqli_query($con,"select * from venta_diaria ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Ventas diaria</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/fair.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="venta_diaria.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
      
      <h4>
<?php

$num=1;
    $query=mysqli_query($con,"select * from plan_cliente ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Ventas planes</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/fair.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="planes.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>





           <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php

$num=1;

echo $num;
?>
      </h4>
              <p>Mensajes</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/message.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="mensaje.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>

        
                               <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
      
      <h4>
<?php

$num=1;

echo $num;
?>
      </h4>
              <p>Calculadora</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/ass.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="calculadora.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
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
            Gimnacio tusolutionweb <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>




    <!-- /gauge.js -->
  </body>
</html>

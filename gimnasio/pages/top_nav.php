

              <?php
$caja_cont=0;
$acumulado=0;

    $caja_query=mysqli_query($con,"select * from caja where estado='abierto' ")or die(mysqli_error());
    $i=0;
    while($row_caja=mysqli_fetch_array($caja_query)){
      $caja_cont++;
      $acumulado=$row_caja['monto'];
    }
if ($caja_cont==0) {

}
?>
 <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                         <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="subir_us/<?php echo $imagen; ?>" alt=""><?php echo $nombre; ?>

                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar caja</a></li>

                  </ul>
                </li>   

				 <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/caja.png" alt="">CAJA<?php echo "<h2>$simbolo_moneda $acumulado</h2>"; ?>

                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                          <?php
                          if ($caja_cont==0) {


                          ?>
                           <li><a href="caja.php"><i class="fa fa-money"></i> Abrir  caja</a></li>
                                   <?php                   
}
           if ($caja_cont>0) {


                          ?>   

                    <li><a href="caja_close.php"><i class="fa fa-money"></i> Cerrar caja</a></li>

                         <?php 
                         }
                             ?>  
                  </ul>
                </li>  





                                         <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="img/pos.png" alt="">POS

                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                
                    <li><a href="ventas.php"><i class="fa fa-money"></i> POS productos</a></li>
                    <li><a href="plan_cliente.php"><i class="fa fa-money"></i> POS planes</a></li>
                    <li><a href="venta_diaria.php"><i class="fa fa-money"></i> POS entrada diaria</a></li>
                    
                  </ul>
                </li>  

              </ul>
            </nav>
          </div>
 </div>
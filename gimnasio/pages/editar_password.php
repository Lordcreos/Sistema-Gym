
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
//    if ($usuario=="si") {
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
  <?php
     if(isset($_REQUEST['cid']))
            {
              $cid=$_REQUEST['cid'];
            }
            else
            {
            $cid=$_POST['cid'];
          }


?>

                           <?php
                         
             //         if ($guardar=="si") {
                    
                      ?>

                  <?php
               //       }
                      ?>

                  <!-- Date range -->
               

      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> MODIFICAR USUARIO</h3>
                </div><!-- /.box-header -->
              
              <a class="btn btn-warning btn-print" href="usuario.php"    style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>

                <div class="box-body">
                

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from usuario where id= '$cid' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $cid=$row['id'];
     $tipo=$row['tipo'];
?>
      
        <form class="form-horizontal" method="post" action="usuario_actualizar_password.php" enctype='multipart/form-data'>
            <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $row['id'];?>" required>
   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Contraseña</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="password" class="form-control pull-right" id="date" name="password" placeholder="password " required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

 <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Repita contraseña</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
<input type="password" class="form-control pull-right" id="password2" name="password2" placeholder="password " required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>     
          
    <button type="submit" class="btn btn-primary">GUARDAR</button>          
  
                   
            <br><br><br><hr>
              <div class="modal-footer">


              </div>
        </form>
            
 <!--end of modal-->

<?php }?>

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

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>
                                         <?php 
 // }    
?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#id_provincia").change(function(){
      $.get("get_municipio.php","id_provincia="+$("#id_provincia").val(), function(data){
        $("#id_municipio").html(data);
        console.log(data);
      });
    });


  });

function Principal(){
        var flag1 = true;
        $(document).on('keydown','[id=telefono]',function(e){
            if($(this).val().length == 3 && flag1) {
                $(this).val($(this).val()+"-");
                flag1 = false;
            }
                var flag2 = true;
                    if($(this).val().length == 7 && flag2) {
                $(this).val($(this).val()+"-");
                flag2 = false;
            }
        });
            var flag3 = true;
        $(document).on('keydown','[id=cedula]',function(e){
            if($(this).val().length == 3 && flag3) {
                $(this).val($(this).val()+"-");
                flag3 = false;
            }
                var flag4 = true;
                    if($(this).val().length == 11 && flag4) {
                $(this).val($(this).val()+"-");
                flag4 = false;
            }
        });




         var flag5 = true;
        $(document).on('keydown','[id=telefono]',function(e){
            if($(this).val().length == 12 && flag5) {
     this.value = this.value.slice(0,11); 
                flag5 = false;
            }

        });
         var flag6 = true;
        $(document).on('keydown','[id=cedula]',function(e){
            if($(this).val().length == 13 && flag6) {
     this.value = this.value.slice(0,12); 
                flag6 = false;
            }

        });
    }


</script>


    <!-- /gauge.js -->
  </body>
</html>

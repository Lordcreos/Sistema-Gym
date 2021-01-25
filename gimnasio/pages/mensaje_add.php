<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$correo_receptor = $_POST['correo_receptor'];
	$mensaje = $_POST['mensaje'];



  $id_sesion=$_SESSION['id'];



$correo="";

            $query1=mysqli_query($con,"select * from usuario where id='$id_sesion'")or die(mysqli_error());

                      while($row1=mysqli_fetch_array($query1)){

                   $correo = $row1['correo'];
        $telefono = $row1['telefono'];
     $nombre = $row1['nombre'].'  '.$row1['apellido'];
}



		





	$to = $correo_receptor;
$subject = "Le han enviado un mensaje de  :".$empresa."  correo de empresa es:".$correo."  telefono de empresa es:".$telefono;
$message =$mensaje;
$headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to, $subject, $message, $headers);

	echo "<script>document.location='mensaje.php'</script>";
  




?>

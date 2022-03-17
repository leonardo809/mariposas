<?php $link=mysqli_connect("localhost","root","root","mariposas");
$id=$_POST['id'];

$zona=strtoupper($_POST['zona']);
$clima=strtoupper($_POST['clima']);
$tem=$_POST['tem'];
$flo=strtoupper($_POST['flo']);
$oro=strtoupper($_POST['oro']);
$ubi=strtoupper($_POST['ubicacion']);
if (!$link) echo 'NO SE CONECTÓ LA BASE DE DATOS'; 
$consultar = "call a_zonas('$id','$zona','$clima','$tem','$flo','$oro','$ubi')";
          
            $query=mysqli_query ($link,$consultar);
            if($query){
                echo"<script>alert('Se han podido actualizar sus datos efectivamente, actualice la pagina para ver los cambios');window.location='../../zonas.php'</script>";
            }else{
                echo"<script>alert('No se han podido actualizar sus datos');window.history.go(-1)</script>";
            }
       
            ?>
             
             

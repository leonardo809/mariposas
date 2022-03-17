<?php $link=mysqli_connect("localhost","root","root","mariposas");
$id=$_POST['id'];
$nombre=strtoupper($_POST['nombre']);
$apellido=strtoupper($_POST['apellido']);
$l_ori=strtoupper($_POST['l_ori']);
$nacio=strtoupper($_POST['nacio']);
$f_naci=$_POST['f_naci'];
$f_muer=$_POST['f_muer'];
if (!$link) echo 'NO SE CONECTÓ LA BASE DE DATOS'; 
$consultar = "call a_clasificador('$id','$nombre','$apellido','$l_ori','$nacio','$f_naci','$f_muer')";
          
            $query=mysqli_query ($link,$consultar);
            if($query){
                echo"<script>alert('Se han podido actualizar sus datos efectivamente, actualice la pagina para ver los cambios');window.location='../../clasificadores.php'</script>";
            }else{
                echo"<script>alert('No se han podido actualizar sus datos');window.history.go(-1)</script>";
            }
       
            ?>
             
             

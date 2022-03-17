<?php $link=mysqli_connect("localhost","root","root","mariposas");
$id=strtoupper($_POST['id']);
$huevo=strtoupper($_POST['familia']);
$larva=strtoupper($_POST['larva']);
$adulto=strtoupper($_POST['adulto']);
$color=strtoupper($_POST['color']);
$cuerpo=strtoupper($_POST['cuerpo']);
$alas=strtoupper($_POST['alas']);
$determinador=$_POST['combo'];
if (!$link) echo 'NO SE CONECTÓ LA BASE DE DATOS'; 
$consultar = "call a_familia('$id','$huevo','$larva','$adulto','$color','$cuerpo','$las','$determinador')";
          
            $query=mysqli_query ($link,$consultar);
            if($query){
                echo"<script>alert('Se han podido actualizar sus datos efectivamente, actualice la pagina para ver los cambios');window.location='../../familia.php'</script>";
            }else{
                echo"<script>alert('No se han podido actualizar sus datos');window.history.go(-1)</script>";
            }
       
            ?>
             
             

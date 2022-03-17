<?php $link=mysqli_connect("localhost","root","root","mariposas");
$id=strtoupper($_POST['id']);
$nombre=strtoupper($_POST['nombre']);
$alas=$_POST['alas'];
$color=strtoupper($_POST['color']);
$estado=strtoupper($_POST['combo']);
$ano=$_POST['ano'];
$zona=$_POST['combo2'];
$clasificador=$_POST['combo3'];
$genero=strtoupper($_POST['combo4']);
if (!$link) echo 'NO SE CONECTÓ LA BASE DE DATOS'; 
$consultar = "call a_mariposa('$id','$nombre','$alas','$color','$estado','$ano','$zona','$clasificador','$genero')";
            $query=mysqli_query ($link,$consultar);
            if($query){
                echo"<script>alert('Se han podido actualizar sus datos efectivamente, actualice la pagina para ver los cambios');window.location='../../mariposas.php'</script>";
            }else{
                echo"<script>alert('No se han podido actualizar sus datos');window.history.go(-1)</script>";
            }
       
?>
             
             

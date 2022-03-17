<?php $link=mysqli_connect("localhost","root","root","mariposas");
$id=strtoupper($_POST['id']);
$carac=strtoupper($_POST['carac']);
$nom=strtoupper($_POST['nom']);
$reg=strtoupper($_POST['reg']);
$esp=strtoupper($_POST['esp']);
$fam=strtoupper($_POST['combo2']);
$deter=$_POST['combo'];
if (!$link) echo 'NO SE CONECTÓ LA BASE DE DATOS'; 
$consultar = "call a_genero('$id','$carac','$nom','$reg','$esp','$fam','$deter')";
            $query=mysqli_query ($link,$consultar);
            if($query){
                echo"<script>alert('Se han podido actualizar sus datos efectivamente, actualice la pagina para ver los cambios');window.location='../../genero.php'</script>";
            }else{
                echo"<script>alert('No se han podido actualizar sus datos');window.history.go(-1)</script>";
            }
       
?>
             
             

<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$link=mysqli_connect("localhost","root","root","credenciales");
    if (!$link) echo 'NO SE CONECTÓ LA BASE DE DATOS';
$consulta="SELECT * FROM credenciales WHERE usuario='$usuario' AND contraseña='$contraseña'";
$resultado=mysqli_query($link,$consulta);
$row=mysqli_num_rows($resultado);
if($row){
    header("location:php/administracion/mariposas.php");
}else{
    ?>
    <?php
    include("sesion.php");
    ?>
    <h1>ERROR EN LA AUTENTICACION</h1>
    <?php
}

mysqli_close($link);
?>
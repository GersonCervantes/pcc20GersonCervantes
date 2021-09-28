<?php
$usu=$_POST['usuario'];
$con=$_POST['contraseña'];

if ($usu=="admin" and $con=="mensajes") {
    header("location:mens.php");
}else {
    echo '<script lenguage="javascript">';
    echo 'alert("Usuario o contraseña son incorrectas")';
    header("location:log.php");
    echo '</script>';
}
?>
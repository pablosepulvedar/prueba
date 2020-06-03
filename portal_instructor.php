<?php
session_start();
include_once 'conexion.php';

if (isset($_SESSION['instructor'])){
    echo 'Bienvenido '.$_SESSION['instructor'];
    echo '<br><a href="cerrar.php">Cerrar Sesión</a>';
}else{
    header ('Location:escuela.php');
}

?>
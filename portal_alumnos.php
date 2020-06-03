<?php
session_start();

if (isset($_SESSION['admin'])) {
    echo 'Bienvenido '.$_SESSION['alumno'];
    echo '<br><a href="cerrar.php">Cerrar Sesión</a>';
}else{
    header('Location:escuela.php');
}
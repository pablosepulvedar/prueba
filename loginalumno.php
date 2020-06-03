<?php
session_start();
include_once 'conexion.php';

$usuario_login = $_POST['rut_alumno'];
$contrasena_login = $_POST['contrasena_alumno'];

$sql = 'SELECT * FROM alumnos WHERE rut= ?';
$sentencia = $mbd->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

if(!$resultado){
    echo 'No existe Usuario';
    die();
}

if( password_verify( $contrasena_login , $resultado['contrasena'])){
    $_SESSION['alumno'] = $resultado['nombre'];
    header('Location: portal_alumnos.php');
}else{
    echo 'Error en la contraseña';
    die();
}
?>
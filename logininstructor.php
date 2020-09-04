<?php
session_start();
include_once 'conexion.php';

$usuario_login = $_POST['rut_instructor'];
$contrasena_login = $_POST['contrasena_instructor'];

$sql = 'SELECT * FROM instructores WHERE rut= ?';
$sentencia = $mbd->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

if(!$resultado){
    echo 'No existe Usuario';
    die();
}

//if( password_verify( $contrasena_login , $resultado['pass'])){
    if($contrasena_login == $resultado['pass']){    
    $_SESSION['instructor'] = $resultado['nombre'];
    header('Location: portal_instructor.php');
}else{
    echo 'Error en la contraseña';
    die();
}
?>

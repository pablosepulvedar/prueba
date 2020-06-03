<?php

include_once 'conexion.php';

if($_POST){
  $rut = $_POST['rut'];
  $fechanac = $_POST['fechanac'];
  $nombre = $_POST['nombre'];
  $apellidop = $_POST['apellidop'];
  $apellidom = $_POST['apellidom'];
  $direccion = $_POST['direccion'];
  $region = $_POST['regiones'];
  $comuna = $_POST['comunas'];
  $email = $_POST['mail'];
  $contrasena = $_POST['contrasena'];
  //cifrado contraseña
  $contrasena = password_hash("$contrasena", PASSWORD_DEFAULT);

  $sql = 'SELECT * FROM us_nuevos WHERE rut = ?';
  $sentencia = $mbd->prepare($sql);
  $sentencia->execute(array($rut));
  $resultado = $sentencia->fetch();

  if($resultado){
    echo '<h1>El usuario ya existe</h1>';
    die(header ("refresh:3; url=http://localhost/dashboard/pruebabootstrap/login.html"));
  }


  $sql_insertar = 'INSERT INTO us_nuevos (rut, fechanac, nombre, apellidop, apellidom, direccion, region, comuna, email, contraseña) 
  VALUES (?,?,?,?,?,?,?,?,?,?)';

  $agregar = $mbd->prepare($sql_insertar);
  $agregar->execute(array($rut, $fechanac, $nombre, $apellidop, $apellidom, $direccion, $region, $comuna, $email, $contraseña));
  
  //cerrar conexion
  $agregar = null;
  $mbd = null;

  echo '¡Registro exitoso!<br>Bienvenido '.$nombre.' '.$apellidop;
  header ("refresh:3; url=http://localhost/dashboard/pruebabootstrap/login.html");
}
?>

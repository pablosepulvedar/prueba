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
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Registro</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="#">
        <img src="img/logovector.svg" width="30" height="30" class="d-inline-block align-top" alt="Logo" loading="lazy">
        ChileParapente
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav mr-auto text-center">
          <a class="nav-item nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Login</a>
          <a class="nav-item nav-link" href="#">Registro</a>
          <a class="nav-item nav-link" href="#">Contacto</a>
      </div>
      <div class="d-flex flex-row justify-content-center">
        <a href="" class="btn btn-outline-primary mr-2">F</a>
        <a href="" class="btn btn-outline-danger">Y</a>
      </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
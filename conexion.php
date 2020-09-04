<?php

    $link = 'mysql:host=localhost;dbname=parapenteandino';
    $username = "root";
    $password = "";
    
    try {
      
        $mbd = new PDO($link, $username, $password);

    } catch (PDOException $e) {
      print "¡Error!: ". $e->getMessage()."<br/>";
      die();
    }
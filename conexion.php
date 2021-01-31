<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=almacen_ganadero', 'root', '');
         $conexion -> exec("set names utf8");
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }

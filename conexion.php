<?php
    try {
        $conexion = new mysqli('localhost'. 'root', '', 'catedrasApp');
        if ($conexion) {
            throw new Exception('error en conexion' . mysqli_error($conexion));
        }
    } catch (Exception $e) {
        echo 'Se ha producido una excepción: ' . $e->getMessage();
    }   
?>
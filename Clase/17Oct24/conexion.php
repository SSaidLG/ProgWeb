<?php
    $host_db = "127.0.0.1:3306";
    $user_name = "root";
    $user_pass = "01062004";
    $db_name = "fes_aragon";

    $conexion = new mysqli($host_db, $user_name, $user_pass, $db_name);

    // Verificar si la conexión falló
    if ($conexion->connect_error) {
        die("<script>alert('Error en la conexión: " . $conexion->connect_error . "');</script>");
    } else {
        echo "<script>alert('Conexión realizada correctamente');</script>";
    }
?>
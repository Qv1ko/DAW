<?php
    $host = "localhost";
    $user = "ajaxUser";
    $dbname = "ajax";
    $pass = "dwec";
    $table = "tareas";

    $desc = isset($_POST['desc']) ? $_POST['desc'] : null;

    $conexion = mysqli_connect($host, $user, $pass, $dbname);
    mysqli_query($conexion, "SET NAMES 'utf8'");

    // Crear el tarea
    $query = "INSERT INTO $table (descripcion, estado) VALUES (?, 'pendiente')";
    $stmt = mysqli_prepare($conexion, $query);

    mysqli_stmt_bind_param($stmt, 's', $desc);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    mysqli_close($conexion);
?>
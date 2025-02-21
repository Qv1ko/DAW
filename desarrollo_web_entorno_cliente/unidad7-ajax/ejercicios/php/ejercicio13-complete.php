<?php
    $host = "localhost";
    $user = "ajaxUser";
    $dbname = "ajax";
    $pass = "dwec";
    $table = "tareas";

    $id = isset($_POST['id']) ? $_POST['id'] : null;

    // Creamos la conexión al servidor.
    $conexion = mysqli_connect($host, $user, $pass, $dbname);
    mysqli_query($conexion, "SET NAMES 'utf8'");

    $query = "UPDATE $table SET estado = 'realizada' WHERE id = $id";
    mysqli_query($conexion, $query);

    mysqli_close($conexion);
?>
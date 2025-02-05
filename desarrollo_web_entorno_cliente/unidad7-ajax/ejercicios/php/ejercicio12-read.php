<?php
    // Cabecera para indicar que vamos a enviar datos JSON y que no haga caché de los datos.
    header('Content-Type: application/json');
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

    // Configuración BASE DE DATOS
    $host = "localhost";
    $user = "ajaxUser";
    $dbname = "ajax";
    $pass = "dwec";
    $table = "viajescomprados";

    // Creamos la conexión al servidor.
    $conexion = mysqli_connect($host, $user, $pass, $dbname);
    mysqli_query($conexion, "SET NAMES 'utf8'");

    $query = "SELECT * FROM $table ORDER BY id";
    $resultado = mysqli_query($conexion, $query);

    // Verificar si la consulta fue exitosa
    if ($resultado) {
        $datos = [];

        // Recorrer los resultados y almacenarlos en un array
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $datos[] = $fila;
        }

        // Devolver los datos en formato JSON
        echo json_encode($datos);
    }
    
    mysqli_close($conexion);
?>
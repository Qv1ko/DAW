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

    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    
    $name = $data["nombre"];
    $desc = $data["descripcion"];
    $email = $data["email"];
    $num = (int) $data["num"];
    $price = (int) $data["precio"];
    $creditCard = (int) $data["numerotarjeta"];
    $csv = (int) $data["csv"];

    // Creamos la conexión al servidor.
    $conexion = mysqli_connect($host, $user, $pass, $dbname);
    mysqli_query($conexion, "SET NAMES 'utf8'");

    // Crear el viaje
    $query = "INSERT INTO $table (nombre, descripcion, email, num, precio, numerotarjeta, csv) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);
    
    mysqli_stmt_bind_param($stmt, 'sssiiii', $name, $desc, $email, $num, $price, $creditCard, $csv);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    // Obtiene todos los datos
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
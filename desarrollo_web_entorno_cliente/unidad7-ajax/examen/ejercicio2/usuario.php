<?php
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    $nombre = $data->nombre;
    $email = $data->email;
    $password = $data->password;

    $datos = new stdClass();
    $datos->ok = "SI";
    $datos->messageOk = "USUARIO ". $nombre . " CON EMAIL " . $email . " Y PASSWORD ". $password . " REGISTRADO CORRECTAMENTE";
    $datos->messageError = "ERROR AL PROCESAR AL USUARIO ". $nombre;

    echo json_encode($datos)
?>
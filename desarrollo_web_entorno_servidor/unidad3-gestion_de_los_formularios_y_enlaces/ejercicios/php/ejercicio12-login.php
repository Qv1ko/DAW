<?php

    const USER = "Tzqk3vM=";
    const PASS = "QzS81vM=";
    const KEY = "Ejercicio 12";
    const IV = "ejercicio12-dwes";

    if (isset($_POST["user"]) && isset($_POST["password"])) {
        $data = [
            "user" => $_POST["user"],
            "pass" => $_POST["password"]
        ];

        if (openssl_encrypt($data["user"], "aes-256-ctr", KEY, 0, IV) === USER && openssl_encrypt($data["pass"], "aes-256-ctr", KEY, 0, IV) === PASS) {
            echo "<h1 style='background-color: #155724; color: white'>¡BIENVENIDO! Iniciaste sesión correctamente.</h1>";
        } else {
            echo "<h1 style='background-color: #8f444b; color: white'>¡ERROR! El usuario no existe o la contraseña es incorrecta.</h1>";
        }
    }

?>
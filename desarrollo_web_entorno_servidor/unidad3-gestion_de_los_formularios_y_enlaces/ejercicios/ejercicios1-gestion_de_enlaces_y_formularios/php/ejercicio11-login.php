<?php

    const USER = "GU+ScGQ=";
    const PASS = "FUGKeGQ=";
    const KEY = "Ejercicio 11";
    const IV = "ejercicio11-dwes";

    if (isset($_POST["user"]) && isset($_POST["password"])) {
        if (openssl_encrypt($_POST["user"], "aes-256-ctr", KEY, 0, IV) === USER && openssl_encrypt($_POST["password"], "aes-256-ctr", KEY, 0, IV) === PASS) {
            echo "<h1 style='background-color: #155724; color: white'>¡BIENVENIDO! Iniciaste sesión correctamente.</h1>";
        } else {
            echo "<h1 style='background-color: #8f444b; color: white'>¡ERROR! El usuario no existe o la contraseña es incorrecta.</h1>";
        }
    }

?>
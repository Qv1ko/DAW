<?php

    session_start();

    $_SESSION['datossesion'] = $_POST['texto'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: " . $_POST['opcion']);
        exit();
    }

?>
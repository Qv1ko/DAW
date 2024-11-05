<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: " . $_POST['opcion'] . "?texto=" . urlencode($_POST['texto']));
        exit();
    }

?>
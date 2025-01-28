<?php
    require_once("../model/model.php");

    $connection = new Connection($_POST["db"]);

    if ($connection->error) {
        require_once("../view/error.php");
    } else {
        $results = explode(";", $connection->execQuery(htmlspecialchars($_POST["query"])));
        if ($connection->error) {
            require_once("../view/error.php");
        } else {
            if ($connection->info) {
                require_once("../view/info.php");
            } else {
                require_once("../view/printResult.php");
            }
        }
    }
?>
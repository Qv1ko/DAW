<?php
    require_once("../models/bd_class.php");
    $db = new DB();

    if (isset($_POST["actor"])) {
        require_once("../models/model_class_intervenir.php");
        $obj = new Intervenir($db);
        $peliculas = explode(";", $obj->consulta_peliculas_actor($_POST["actor"]));
        require_once("../views/peliculas_actor.php");
    }
?>
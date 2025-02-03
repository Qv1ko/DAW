<?php
    require_once("../models/bd_class.php");
    $db = new DB();

    if (isset($_POST["nacionalidad"])) {
        require_once("../models/model_class_actores.php");
        $obj = new Actores($db);
        $actores = explode(";", $obj->consulta_actores_nacionalidad($_POST["nacionalidad"]));
        require_once("../views/num_nacionalidades.php");
    }
?>
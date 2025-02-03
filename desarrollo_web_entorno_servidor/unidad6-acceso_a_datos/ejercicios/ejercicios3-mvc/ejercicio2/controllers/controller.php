<?php
    if (isset($_POST["consulta"])) {
        require_once("../models/bd_class.php");
        $db = new DB();

        switch ($_POST["consulta"]) {
            case 'dramaticas':
                require_once("../models/model_class_peliculas.php");
                $obj = new Peliculas($db);
                $peliculas = explode(";", $obj->consulta_dramaticas());
                require_once("../views/peliculas_drama.php");
                break;
            
            case 'actrices':
                require_once("../models/model_class_actores.php");
                $obj = new Actores($db);
                $actrices = explode(";", $obj->consulta_actrices());
                require_once("../views/nombre_actrices.php");
                break;
            
            case 'actores-nacionalidad':
                require_once("../models/model_class_actores.php");
                $obj = new Actores($db);
                $nacionalidades = explode(";", $obj->consulta_nacionalidades());
                require_once("../views/formulario_nacionalidad.php");
                break;
            
            case 'peliculas-del-actor':
                require_once("../models/model_class_actores.php");
                $obj = new Actores($db);
                $actores = explode(";", $obj->consulta_actores());
                require_once("../views/formulario_actor.php");
                break;
        }
    }
?>
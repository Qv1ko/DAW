<?php
    switch ($_POST["opcion"]) {
        case 'consultas':
            require_once("../views/vistaFormularioConsultas.php");
            break;
        
        case 'insertar':
            require_once("../views/vistaFormularioInsertar.php");
            break;
        
        case 'borrar':
            require_once("../views/vistaFormularioBorrar.php");
            break;
    }
?>
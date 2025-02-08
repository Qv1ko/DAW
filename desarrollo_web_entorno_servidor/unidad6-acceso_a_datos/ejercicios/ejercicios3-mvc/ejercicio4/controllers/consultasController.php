<?php
    require_once("../models/conectarModel.php");
    require_once("../models/oposicionModel.php");

    $oposicion = new Oposicion();

    switch ($_POST["opcion"]) {
        case 'subsanaciones':
            $res_consulta = $oposicion->subsanaciones();
            require_once("../views/vistaMensaje.php");
            break;

        case 'con_plaza':
            $res_consulta = $oposicion->get_conPlazas();
            require_once("../views/vistaConPlazas.php");
            break;

        case 'bolsa':
            $res_consulta = $oposicion->get_bolsa();
            require_once("../views/vistaBolsa.php");
            break;

        case 'no_aptos':
            $res_consulta = $oposicion->get_noAptos();
            require_once("../views/vistaNoAptos.php");
            break;
    }
?>

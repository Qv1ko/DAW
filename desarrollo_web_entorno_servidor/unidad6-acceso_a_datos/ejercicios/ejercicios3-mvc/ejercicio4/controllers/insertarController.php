<?php
    require_once("../models/conectarModel.php");
    require_once("../models/oposicionModel.php");

    $oposicion = new Oposicion();
    $res_consulta = $oposicion->insertar_opositor($_POST["codigo"], $_POST["teoria"], $_POST["practica"]);

    require_once("../views/vistaMensaje.php");
?>

<?php
    require_once("../models/conectarModel.php");
    require_once("../models/oposicionModel.php");

    $oposicion = new Oposicion();
    $res_consulta = $oposicion->borrar_opositor($_POST["codigo"]);

    require_once("../views/vistaMensaje.php");
?>

<?php
    if (isset($_POST["id"]) && $_POST["id"] != "") {
        require_once("../models/modeloConexion.php");

        require_once("../models/modeloMascota.php");
        $mascota = new Mascota(Conectar::conexion());
        $mascota->set_id($_POST["id"]);

        $resultado = $mascota->acoger();
        require_once("../views/vistaMensaje.php");
    } else {
        require_once("../views/vistaAcoger.html");
    }
?>
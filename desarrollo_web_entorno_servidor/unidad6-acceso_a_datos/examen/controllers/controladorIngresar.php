<?php
    if (isset($_POST["id"]) && $_POST["id"] != "" && isset($_POST["nombre"]) && $_POST["nombre"] != "" && isset($_POST["especie"]) && (strtoupper($_POST["especie"]) == "PERRO" or strtoupper($_POST["especie"]) == "GATO") && isset($_POST["sexo"]) && (strtoupper($_POST["sexo"]) == "M" or strtoupper($_POST["sexo"]) == "H") && isset($_POST["centro"]) && $_POST["centro"] != "") {
        require_once("../models/modeloConexion.php");

        require_once("../models/modeloMascota.php");
        $mascota = new Mascota(Conectar::conexion());

        $mascota->set_id($_POST["id"]);
        $mascota->set_nombre($_POST["nombre"]);
        $mascota->set_especie(substr(strtoupper($_POST["especie"]), 0, 1));
        $mascota->set_sexo(strtoupper($_POST["sexo"]));
        $mascota->set_centro(strtoupper($_POST["centro"]));

        $resultado = $mascota->ingresar();
        require_once("../views/vistaMensaje.php");
    } else {
        require_once("../views/vistaIngresar.html");
    }
?>
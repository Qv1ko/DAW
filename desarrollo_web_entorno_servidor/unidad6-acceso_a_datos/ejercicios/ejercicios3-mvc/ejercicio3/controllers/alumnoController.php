<?php
    require_once("../models/alumnoModel.php");

    switch ($_POST["alumoper"]) {
        case 1:
            require_once("../views/recogerDatosInsertarView.html");
            break;

        case 2:
            require_once("../views/recogerIdBorrarView.html");
            break;
    
        case 3:
            require_once("../views/recogerDatosModificarView.html");
            break;

        case 4:
            $alumno = new Alumno();
            $res_consulta = $alumno->get_alumno();
            require_once("../views/alumnoView.php");
            break;
    }
?>
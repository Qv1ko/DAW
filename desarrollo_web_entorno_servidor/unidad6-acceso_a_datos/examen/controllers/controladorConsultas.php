<?php
    if (isset($_POST["consulta"]) && $_POST["consulta"] != "") {
        $resultado = "<p>La consulta seleccionada no se pudo ejecutar</p>";
        require_once("../models/modeloConexion.php");

        switch ($_POST["consulta"]) {
            case 'localidad':
                require_once("../models/modeloCentro.php");
                $centro = new Centro(Conectar::conexion());

                $resultados = $centro->get_localidad();
                require_once("../views/vistaLocalidades.php");
                break;

            case 'nombreyespecie':
                require_once("../models/modeloMascota.php");
                $mascota = new Mascota(Conectar::conexion());

                $resultados = $mascota->get_nombreYEspecie();
                require_once("../views/vistaNombreYEspecie.php");
                break;

            case 'numeropg':
                require_once("../models/modeloMascota.php");
                $mascota = new Mascota(Conectar::conexion());

                $resultados = $mascota->get_numeroPorEspecie();
                require_once("../views/vistaNumeroPorEspecie.php");
                break;

            default:
                require_once("../views/vistaMensaje.php");
        }
    } else {
        require_once("../views/vistaMensaje.php");
    }
?>
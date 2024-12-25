<?php

    require_once("./datos_aux.php");

    function construirArray(): array {
        return [
            "Ficción" => [
                "Atrapados",
                "Dune"
            ],
            "Aventuras" => [
                "Viajando",
                "Vivir",
                "Contigo"
            ],
            "Misterio" => [
                "Inferno",
                "Flandes",
                "Da_vinci"
            ]
        ];
    }

    function validarPrecio($precio, string &$mensaje) {
        if (empty($precio)) {
            $mensaje = "* obligatorio.";
        } else if (!filter_var($precio, FILTER_VALIDATE_FLOAT)) {
            $mensaje = "* valor númerico.";
        } else if ($precio < 0) {
            $mensaje = "* valor positivo.";
        } else {
            $mensaje = "";
        }
    }

    function getGenero(string $titulo): string {
        foreach ($libros as $genero => $titulos) {
            foreach ($titulos as $tituloLibro) {
                if ($titulo === $tituloLibro) {
                    return $genero;
                }
            }
        }
    }

?>
<?php

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

    function validarPrecio($precio, string &$mensaje): void {
        $mensaje = "";
        if (empty($precio)) {
            $mensaje = "* obligatorio.";
        } else if (!filter_var($precio, FILTER_VALIDATE_FLOAT)) {
            $mensaje = "* valor númerico.";
        } else if ($precio < 0) {
            $mensaje = "* valor positivo.";
        }
    }

    function getGenero(string $titulo): string {
        foreach (construirArray() as $genero => $titulos) {
            foreach ($titulos as $tituloLibro) {
                if ($titulo === $tituloLibro) {
                    return $genero;
                }
            }
        }
        return "";
    }

?>
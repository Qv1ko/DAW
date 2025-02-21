<?php
    function sanitizar(string $dato) {
        return htmlspecialchars(strtolower(trim($dato)));
    }

    function validacion(string $dato, bool &$correcto): string {
        $respuesta = "";
        if (preg_match("/[^a-z]+/", $dato)) {
            $respuesta = '<p>El formato es incorrecto</p>';
        } else if ($dato != "blanco") {
            $respuesta = '<p>Intententalo de nuevo, ' . $dato . ' no es la respuesta correcta</p>';
        } else {
            $respuesta = '<p>¡Repuesta correcta!</p>';
            $correcto = true;
        }
        return $respuesta;
    }
?>
<?php

    class Validador {
        public $correcto = false;

        public function sanitizar(string $dato): string {
            return htmlspecialchars(strtolower(trim($dato)));
        }

        public function validacion(string $dato): string {
            $respuesta = "";
            if (preg_match("/[^a-z]+/", $dato)) {
                $respuesta = '<p>El formato es incorrecto</p>';
            } else if ($dato != "blanco") {
                $respuesta = '<p>Intententalo de nuevo, ' . $dato . ' no es la respuesta correcta</p>';
            } else {
                $respuesta = '<p>¡Respuesta correcta!</p>';
                $this->correcto = true;
            }

            return $respuesta;
        }
    }

?>
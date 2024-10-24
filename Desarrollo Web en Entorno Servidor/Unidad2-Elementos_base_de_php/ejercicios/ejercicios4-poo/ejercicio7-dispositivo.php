<?php

    namespace e7dispositivo;

    class Dispositivo {

        private $codigo;
        private $tipo;
        private $ubicacion;

        function __construct(string $codigo, string $tipo, string $ubicacion) {
            $this->codigo = $codigo;
            $this->tipo = $tipo;
            $this->ubicacion = $ubicacion;
        }

        public function ubicacion(): string {
            return ($this->tipo != "" ? "El dispositivo $this->codigo esta en el $this->ubicacion" : "(! dispositivo sin tipo definido)");
        }

    }

?>
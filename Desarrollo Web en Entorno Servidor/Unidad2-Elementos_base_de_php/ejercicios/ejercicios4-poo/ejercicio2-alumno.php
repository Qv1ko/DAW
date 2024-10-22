<?php

    namespace ejercicio2\alumno;

    class Alumno {

        static $ciclo = "DAW";
        protected $nom;
        protected $edad;

        function __construct(string $nombre, int $e) {
            $this->nom = $nombre;
            $this->edad = $e;
        }

        public function visualizar(): string {
            return "$this->nom $this->edad";
        }

    }

?>
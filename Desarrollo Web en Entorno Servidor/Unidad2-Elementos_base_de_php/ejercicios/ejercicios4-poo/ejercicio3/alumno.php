<?php

    namespace ejercicio3\alumno;

    class Alumno {

        static $ciclo = "DAW";
        protected $nombre;
        protected $edad;

        function __construct(string $nombre, int $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        function visualizar(): string {
            return "$this->nombre $this->edad";
        }

    }

?>
<?php

    namespace e3o1alumno;

    class Alumno {

        static $ciclo = "DAW";
        protected $nombre;
        protected $edad;

        function __construct(string $nombre, int $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

    }

?>
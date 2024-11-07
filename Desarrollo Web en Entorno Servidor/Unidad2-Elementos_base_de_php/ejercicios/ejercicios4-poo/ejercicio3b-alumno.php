<?php

    namespace e3balumno;

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
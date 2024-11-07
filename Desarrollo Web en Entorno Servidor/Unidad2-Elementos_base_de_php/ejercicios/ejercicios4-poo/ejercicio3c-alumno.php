<?php

    namespace e3calumno;

    abstract class Alumno {

        static $ciclo = "DAW";
        protected $nombre;
        protected $edad;

        function __construct(string $nombre, int $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        abstract function supera_curso(bool &$atrib): string;

    }

?>
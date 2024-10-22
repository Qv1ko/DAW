<?php

    class Alumno {

        const CICLO = "DAW";
        private $nom;
        private $edad;

        // function __construct(string $nombre, int $e) {
        //     $this->nom = $nombre;
        //     $this->edad = $e;
        // }

        function constructorAlumno2(string $nombre) {
            $this->nom = "M. " . $nombre;
        }

        function constructorAlumno3(string $nombre, int $e) {
            $this->nom = "Jose " . $nombre;
            $this->edad = $e;
        }

        function __get(string $atrib): mixed {
            return $this->$atrib;
        }

        function __set(string $atrib, mixed $valor) {
            $this->$atrib = $valor;
        }

        function __toString(): string {
            return "Alumno: " . $this->nom . " " . $this->edad . " del ciclo " . self::CICLO;
        }
        
    } // fin de clase Alumno

?>
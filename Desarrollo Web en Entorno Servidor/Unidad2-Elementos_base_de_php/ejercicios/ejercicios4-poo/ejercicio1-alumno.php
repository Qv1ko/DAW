<?php

    abstract class Abstracta {
        public $nombre;
        public $edad;
        abstract function competencia_digital($atrib);
        abstract function calculo_trienios($atrib2);
        function __construct($nom, $edad) {
            $this->nombre = $nom;
            $this->edad = $edad;
        }
    }

    class Alumno extends Abstracta {
        function competencia_digital($curso) {
            if ($curso == 2) {
                return "alta<br>";
            } else {
                return "baja<br>";
            }
        }
        function calculo_trienios($anos_tabajados) {
            return "No corresponde este calculo al alumno";
        }
    }

?>
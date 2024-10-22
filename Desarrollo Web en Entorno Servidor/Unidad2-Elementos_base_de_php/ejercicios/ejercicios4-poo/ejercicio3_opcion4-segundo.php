<?php

    require_once("./ejercicio3_opcion4-aprobado.php");

    class Segundo extends Alumno implements aprobado {

        private $notaMedia;
        private $fct;
        private $proyecto;

        function __construct(string $nombre, int $edad, float $notaMedia, string $fct, float $proyecto) {
            parent::__construct($nombre, $edad);
            $this->notaMedia = $notaMedia;
            $this->fct = ($fct == "Apto" ? "Apto" : "No apto");
            $this->proyecto = $proyecto;
        }

        public function supera_curso(bool &$supera_primero): string {
            return "<p>El alumno $this->nombre" . (($this->notaMedia >= 5 && $this->proyecto >= 5 && $this->fct == "Apto" && $supera_primero) ? " " : " no ") . "ha aprobado el segundo curso</p>";
        }

    }

?>
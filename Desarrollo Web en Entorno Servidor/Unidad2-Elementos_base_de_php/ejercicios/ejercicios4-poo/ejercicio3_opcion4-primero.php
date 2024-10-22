<?php

    require_once("./ejercicio3_opcion4-aprobado.php");

    class Primero extends Alumno implements aprobado {

        private $notaMedia;

        function __construct(string $nombre, int $edad, float $notaMedia) {
            parent::__construct($nombre, $edad);
            $this->notaMedia = $notaMedia;
        }

        public function supera_curso(bool &$resultado): string {
            $resultado = $this->notaMedia >= 5;
            return "<p>El alumno $this->nombre" . ($this->notaMedia >= 5 ? " " : " no ") . "ha aprobado el primer curso</p>";
        }

    }

?>
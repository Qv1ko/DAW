<?php

    class Primero extends Alumno {

        private $clasificaciones;

        function __construct(string $nombre, int $edad, array $clasificaciones) {
            parent::__construct($nombre, $edad);
            $this->clasificaciones = $clasificaciones;
        }

        public function nota_media(): float {
            return array_sum($this->clasificaciones) / count($this->clasificaciones);
        }

        public function supera_curso(mixed &$resultado): string {
            $resultado = $this->nota_media() >= 5;
            return "<p>El alumno $this->nombre" . ($this->nota_media() >= 5 ? " " : " no ") . "ha aprobado el primer curso</p>";
        }

    }

?>
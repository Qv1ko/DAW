<?php

    namespace actividad3\primero;

    use actividad3\alumno as Al;

    class Primero extends Al\Alumno {

        private $notaMedia;

        function __construct(string $nombre, int $edad, float $notaMedia) {
            parent::__construct($nombre, $edad);
            $this->notaMedia = $notaMedia;
        }

        function supera_curso(): bool {
            return $this->notaMedia >= 5;
        }

        function visualizar(): string {
            return parent::visualizar() . ($this->supera_curso() ? "" : " no") . " ha superado el primer curso";
        }

    }

?>
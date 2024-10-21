<?php

    namespace ejercicio3\primero;

    use ejercicio3\alumno as Al;

    class Primero extends Al\Alumno {

        private $notaMedia;

        function __construct(string $nombre, int $edad, float $notaMedia) {
            parent::__construct($nombre, $edad);
            $this->notaMedia = $notaMedia;
        }

        function supera_curso(): bool {
            return $this->notaMedia >= 5;
        }

    }

?>
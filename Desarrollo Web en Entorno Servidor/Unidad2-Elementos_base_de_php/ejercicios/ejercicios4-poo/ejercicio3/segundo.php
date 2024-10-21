<?php

    namespace actividad3\segundo;

    use actividad3\alumno as Al;

    class Segundo extends Al\Alumno {

        private $notaMedia;
        private $fct;
        private $proyecto;

        function __construct(string $nombre, int $edad, float $notaMedia, string $fct, float $proyecto) {
            parent::__construct($nombre, $edad);
            $this->notaMedia = $notaMedia;
            $this->fct = $fct == "Apto" ? "Apto" : "No apto";
            $this->proyecto = $proyecto;
        }

        function supera_curso(bool $supera_primero): bool {
            return $this->notaMedia >= 5 and $this->proyecto >= 5 and $fct == "Apto" and $supera_primero;
        }

        function visualizar(bool $supera_primero): string {
            return parent::visualizar() . ($this->supera_curso($supera_primero) ? "" : " no") . " ha superado el segundo curso";
        }

    }

?>
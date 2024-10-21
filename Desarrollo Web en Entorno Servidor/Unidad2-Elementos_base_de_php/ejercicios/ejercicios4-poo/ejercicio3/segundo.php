<?php

    namespace ejercicio3\segundo;

    use ejercicio3\alumno as Al;
    use ejercicio3\primero as Pr;

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

    }

?>
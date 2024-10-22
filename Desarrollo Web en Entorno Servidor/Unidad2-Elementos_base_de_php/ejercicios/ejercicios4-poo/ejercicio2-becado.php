<?php

    namespace ejercicio2\becado;

    use ejercicio2\alumno as Al;

    class Becado extends Al\Alumno {

        private $importeBeca;

        function __construct(string $n, int $e, float $b) {
            parent::__construct($n, $e);
            $this->importeBeca = $b;
        }

        public function visualizar(): string {
            return parent::visualizar() . " tiene una beca de " . $this->importeBeca . " euros";
        }

    }

?>
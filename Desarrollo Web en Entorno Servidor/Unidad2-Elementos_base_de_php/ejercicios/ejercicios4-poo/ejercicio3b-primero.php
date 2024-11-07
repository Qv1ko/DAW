<?php

    namespace e3bprimero;

    require_once("./ejercicio3b-alumno.php");

    use e3balumno as Al;

    class Primero extends Al\Alumno {

        private $clasificaciones;

        function __construct(string $nombre, int $edad, array $clasificaciones) {
            parent::__construct($nombre, $edad);
            $this->clasificaciones = $clasificaciones;
        }

        public function nota_media(): float {
            return array_sum($this->clasificaciones) / count($this->clasificaciones);
        }

        public function calcular_media(): float {

            $media = 0;
            $iterador = new ArrayIterator($this->clasificaciones);

            for ($i = 0; $i < $iterador->count(); $i++) { 
                $media += $iterador->current();
                $iterador->next();
            }

            return $media / count($this->clasificaciones);

        }

        public function supera_curso(mixed &$resultado): string {
            $resultado = $this->nota_media() >= 5;
            return "<p>El alumno $this->nombre" . ($this->nota_media() >= 5 ? " " : " no ") . "ha aprobado el primer curso</p>";
        }

    }

?>
<?php

    class Libro {
        
        public $titulo;
        private $precio;

        public function __construct(string $titulo, float $precio) {
            $this->titulo = $titulo;
            $this->precio = $precio;
        }

        public function calcularPrecio(float $descuento): float {
            return $this->precio - ($this->precio * ($descuento / 100));
        }

    }

?>
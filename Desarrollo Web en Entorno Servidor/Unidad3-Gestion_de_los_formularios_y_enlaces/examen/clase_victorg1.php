<?php

    class Libro {
        
        public $titulo;
        private $precio;

        public function __construct($titulo, $precio) {
            $this->titulo = $titulo;
            $this->precio = $precio;
        }

        protected function calcularPrecio($descuento) {
            return $this->precio - $this->precio * ($descuento / 100);
        }

    }

?>
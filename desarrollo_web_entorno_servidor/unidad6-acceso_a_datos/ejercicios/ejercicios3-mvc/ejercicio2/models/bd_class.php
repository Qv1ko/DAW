<?php
    class DB {
        private $conexion;

        public function __construct() {
            $this->conexion = new mysqli("localhost", "root", "root", "cinema");
        }

        public function __get($item) {
            return $this->$item;
        }
    }
?>
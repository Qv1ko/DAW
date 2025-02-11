<?php
    class Centro {
        private $bd;
        private $row;

        public function __construct($conexion) {
            $this->bd = $conexion;
            $this->row = array();
        }

        public function get_localidad() {
            $query = $this->bd->query("SELECT DISTINCT localidad FROM centros");
            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->row[] = $fila;
            }
            return $this->row;
        }
    }
?>
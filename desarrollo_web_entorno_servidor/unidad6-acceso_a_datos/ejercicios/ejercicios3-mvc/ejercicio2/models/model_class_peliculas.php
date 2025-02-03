<?php
    class Peliculas {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function consulta_dramaticas(): string {
            $respuesta = $this->db->conexion->query("SELECT titulo FROM peliculas WHERE genero = 'drama'");
            $data = [];

            if ($respuesta->num_rows > 0) {
                while ($fila = $respuesta->fetch_array()) {
                    array_push($data, $fila[0]);
                }
                return implode(";", $data);
            }

            return "";
        }
    }
?>
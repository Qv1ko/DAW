<?php
    class Intervenir {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function consulta_peliculas_actor($actor): string {
            $actor = str_pad($actor, 5, "0", STR_PAD_LEFT);

            $respuesta = $this->db->conexion->query("SELECT titulo FROM intervenciones WHERE id_actor = '$actor'");
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
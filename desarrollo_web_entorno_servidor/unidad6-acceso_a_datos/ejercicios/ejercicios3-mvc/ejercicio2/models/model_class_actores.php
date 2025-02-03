<?php
    class Actores {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function consulta_actrices(): string {
            $respuesta = $this->db->conexion->query("SELECT nombre_apellidos FROM actores WHERE sexo = 'f'");
            $data = [];

            if ($respuesta->num_rows > 0) {
                while ($fila = $respuesta->fetch_array()) {
                    array_push($data, $fila[0]);
                }
                return implode(";", $data);
            }

            return "";
        }

        public function consulta_nacionalidades(): string {
            $respuesta = $this->db->conexion->query("SELECT DISTINCT nacionalidad FROM actores");
            $data = [];

            if ($respuesta->num_rows > 0) {
                while ($fila = $respuesta->fetch_array()) {
                    array_push($data, $fila[0]);
                }
                return implode(";", $data);
            }

            return "";
        }
        
        public function consulta_actores_nacionalidad($nacionalidad): string {
            $respuesta = $this->db->conexion->query("SELECT nombre_apellidos FROM actores WHERE nacionalidad = '$nacionalidad'");
            $data = [];

            if ($respuesta->num_rows > 0) {
                while ($fila = $respuesta->fetch_array()) {
                    array_push($data, $fila[0]);
                }
                return implode(";", $data);
            }

            return "";
        }

        public function consulta_actores(): string {
            $respuesta = $this->db->conexion->query("SELECT id_actor, nombre_apellidos FROM actores");
            $data = [];

            if ($respuesta->num_rows > 0) {
                while ($fila = $respuesta->fetch_array()) {
                    $data[$fila[0]] = $fila[1];
                }
                return implode(";", $data);
            }

            return "";
        }
    }
?>
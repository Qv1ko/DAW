<?php
    class Mascota {
        private $id_mascota, $nombre, $especie, $sexo, $id_centro;
        private $bd;
        private $row;

        public function __construct($conexion) {
            $this->bd = $conexion;
            $this->row = array();
        }

        public function set_id($value) {
            $this->id_mascota = $value;
        }

        public function set_nombre($value) {
            $this->nombre = $value;
        }

        public function set_especie($value) {
            $this->especie = $value;
        }

        public function set_sexo($value) {
            $this->sexo = $value;
        }

        public function set_centro($value) {
            $this->id_centro = $value;
        }

        public function ingresar() {
            $mensaje = "Ingreso no realizado";

            try {
                $insertar = $this->bd->query("INSERT INTO mascotas VALUES ('" . $this->id_mascota . "', '" . $this->nombre . "', '" . $this->especie . "', '" . $this->sexo . "', 'A', '" . $this->id_centro . "')");
                if ($insertar) {
                    $mensaje =  "Ingreso realizado";
                } else {
                    throw new Exception("Ingreso no realizado");
                }
            } catch (Exception $err) {
                echo "ERROR: " . $err->getMessage();
            }

            return $mensaje;
        }

        public function acoger() {
            $mensaje = "Acogida no realizada";

            try {
                $modificar = $this->bd->query("UPDATE mascotas SET estado = 'B' WHERE id_mascota = '" . $this->id_mascota . "'");
                if ($modificar) {
                    $mensaje =  "Acogida realizada";
                } else {
                    throw new Exception("Acogida no realizada");
                }
            } catch (Exception $err) {
                echo "ERROR: " . $err->getMessage();
            }

            return $mensaje;
        }

        public function get_nombreYEspecie() {
            $query = $this->bd->query("SELECT nombre, especie FROM mascotas");

            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->row[] = $fila;
            }

            return $this->row;
        }

        public function get_numeroPorEspecie() {
            $queryPerros = $this->bd->query("SELECT COUNT(*) as perros FROM mascotas WHERE especie = 'p'");
            $this->row[] = $queryPerros->fetch(PDO::FETCH_ASSOC);

            $queryGatos = $this->bd->query("SELECT COUNT(*) as gatos FROM mascotas WHERE especie = 'g'");
            $this->row[] = $queryGatos->fetch(PDO::FETCH_ASSOC);

            return $this->row;
        }
    }
?>
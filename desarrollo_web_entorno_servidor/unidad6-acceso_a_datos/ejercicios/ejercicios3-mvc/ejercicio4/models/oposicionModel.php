<?php
    class Oposicion {
        private $cod_op, $notap, $notat;
        private $bd;
        private $fichero;
        private $row;

        public function __construct() {
            require_once("../models/conectarModel.php");
            $this->bd = Conectar::conexion_bd();
            $this->fichero = Conectar::conexion_fichero();
            $this->row = array();
        }

        public function subsanaciones(){
            $message = "Operación no realizada";
            $query = $this->bd->query("SELECT cod_op, notat FROM resultados");

            $this->row = $query->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($this->row)) {

                $contenido = "";

                foreach ($this->row as $fila) {
                    $contenido .= $fila['cod_op'] . ";" . $fila['notat'] . "\n";
                }
                
                file_put_contents($this->fichero, $contenido);
                $message = "Operación realizada";
            }

            return $message;
        }

        public function get_conPlazas() {
            $query = $this->bd->query("SELECT * FROM resultados WHERE notap >= 5 AND notat >= 5");
            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->row[] = $fila;
            }

            return $this->row;
        }

        public function get_bolsa() {
            $query = $this->bd->query("SELECT cod_op FROM resultados WHERE notap >= 5 OR notat >= 5");
            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->row[] = $fila;
            }

            return $this->row;
        }

        public function get_noAptos() {
            $query = $this->bd->query("SELECT COUNT(*) as count FROM resultados WHERE notap < 5 AND notat < 5");
            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->row[] = $fila;
            }

            return $this->row;
        }

        public function borrar_opositor($cod) {
            try {
                $borrar = $this->bd->query("DELETE FROM resultados WHERE cod_op = '$cod'");
                $message = $borrar ? "Operación realizada" : "Operación no realizada";
            } catch (Exception $e) {
                $message = "Operación no realizada";
            }
            return $message;
        }

        public function insertar_opositor($cod, $notap, $notat) {
            try {
                $insertar = $this->bd->query("INSERT INTO resultados VALUES ('$cod', '$notap', '$notat')");
                $message = $insertar ? "Operación realizada" : "Operación no realizada";
            } catch (Exception $e) {
                $message = "Operación no realizada";
            }
            return $message;            
        }
    }
?>
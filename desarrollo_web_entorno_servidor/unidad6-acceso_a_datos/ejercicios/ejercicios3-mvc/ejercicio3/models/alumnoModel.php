<?php
    class Alumno {
        private $id_al, $nom, $edad, $curso;
        private $bd;
        private $row;

        public function __construct() {
            require_once("../models/conectarModel.php");
            $this->bd = Conectar::conexion();
            $this->row = array();
        }

        public function get_alumno() {
            $query = $this->bd->query("SELECT * FROM alumno");
            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->row[] = $fila;
            }
            return $this->row;
        }

        public function delete_alumno($id) {
            $borrar = $this->bd->query("DELETE FROM alumno WHERE id_al = '$id'");
            if ($borrar) {
                $message = "Borrado";
            } else {
                $message = "El borrado no se ha realizado";
            }
            return $message;
        }

        public function insert_alumno($id, $nom, $ed, $cur) {
            $insertar = $this->bd->query("INSERT INTO alumno VALUES ('$id', '$nom', '$ed', '$cur')");
            if ($insertar) {
                $message = "Insertado";
            } else {
                $message = "La inserción no se ha realizado";
            }
            return $message;            
        }

        public function update_alumno($id, $nom, $ed, $cur) {
            $actualizar = $this->bd->query("UPDATE alumno SET nombre = '$nom', edad = '$ed', id_curso = '$cur' WHERE id_al = '$id'");
            if ($actualizar) {
                $message = "Actualizado";
            } else {
                $message = "La actualización no se ha realizado";
            }
            return $message; 
        }

    }
?>
<?php
    class Conectar {
        public static function conexion_bd() {
            try {
                $conexion = new PDO("mysql:host=localhost:3306;dbname=oposiciones", "root", "");
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET UTF8");
            } catch (Exception $e) {
                die("Error " . $e->getMessage());
                echo "Linea del error " . $e->getLine();
            }
            return $conexion;
        }

        public static function conexion_fichero() {
            return "../data/subsanaciones.txt";
        }
    }
?>
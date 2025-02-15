<?php
    class Connection {
        public static function start() {
            try {
                $host = "mysql:host=localhost:3306;";
                $db = "dbname=clasificacion";
                $user = "root";
                $password = "";

                $dbcon = new PDO($host . $db, $user, $password);
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $dbcon->exec("SET CHARACTER SET UTF8");
            } catch (Exception $err) {
                die("Error: " . $err->getMessage());
            }
            return $dbcon;
        }
    }
?>
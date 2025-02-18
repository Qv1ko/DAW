<?php
    class Connection {
        public static function start() {
            try {
                $system = "mysql";
                $host = "sql109.infinityfree.com";
                $port = "3306";
                $db = "if0_38338422_season";
                $user = "if0_38338422";
                $password = "gwrvnjJxTr0";

                $path = $system . ":host=" . $host . ":" . $port . ";dbname=" . $db;

                $dbcon = new PDO($path, $user, $password);
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $dbcon->exec("SET CHARACTER SET UTF8");
            } catch (Exception $err) {
                die("Error: " . $err->getMessage());
            }
            return $dbcon;
        }
    }
?>
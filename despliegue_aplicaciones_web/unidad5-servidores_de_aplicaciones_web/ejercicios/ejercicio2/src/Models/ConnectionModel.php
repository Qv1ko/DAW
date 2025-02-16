<?php
    namespace Models;

    use PDO;
    use PDOException;

    class Connection {
        private static string $host = "localhost";
        private static string $port = "3306";
        private static string $dbName = "clasificacion";
        private static string $user = "root";
        private static string $password = "";

        public static function start(): ?PDO {
            try {
                $dbcon = new PDO("mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$dbName . ";charse=utf8", self::$user, self::$password);
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $dbcon;
            } catch (Exception $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
    }
?>
<?php
    class Connection {
        private $db_connection; // Guarda la conexión
        private $error;
        private $info;

        public function __construct(string $db) {
            try {
                $this->db_connection = new mysqli("localhost", "root", "root", $db);
            } catch (Exception $exc) {
                $this->error = $exc;
            }
        }

        public function __get($att) {
            return $this->$att;
        }

        public function execQuery(string $query): string {
            try {
                $result = $this->db_connection->query($query);
                $data = [];
                $output = "";
    
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {
                        array_push($data, $row[0]);
                    }
                    $output = implode(";", $data);
                } else {
                    $this->info = "El resultado de la consulta no devuelve ninguna fila.";
                }
            } catch (Exception $exc) {
                $this->error = $exc;
            } finally {
                return $output;
            }
        }
    }
?>
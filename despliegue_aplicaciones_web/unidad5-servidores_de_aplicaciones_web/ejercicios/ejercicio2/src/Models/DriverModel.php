<?php
    namespace Models;

    use PDO;
    use PDOException;

    class Driver {
        private PDO $db;

        public function __construct(PDO $connection) {
            $this->db = $connection;
        }

        public function getClassification(): array {
            try {
                $stmt = $this->db->query("SELECT name, total_points FROM drivers ORDER BY total_points DESC, name ASC");
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Error al obtener la clasificación: " . $e->getMessage());
            }
        }

        public function getTeamPoints(): array {
            try {
                $stmt = $this->db->query("SELECT team, SUM(total_points) as points FROM drivers GROUP BY team ORDER BY points DESC");
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Error al obtener los puntos de los equipos : " . $e->getMessage());
            }
        }

        public function getAllIds(): array {
            try {
                $stmt = $this->db->query("SELECT id, name FROM drivers");
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Error al obtener los IDs de los pilotos: " . $e->getMessage());
            }
        }

        public function addPoints($id, $points): void {
            try {
                $stmt = $this->db->prepare("UPDATE drivers SET total_points = total_points + ? WHERE id = ?");
                $stmt->execute([$points, $id]);
            } catch (PDOException $e) {
                die("Error al agregar puntos: " . $e->getMessage());
            }
        }

        public function resetPoints(): void {
            try {
                $this->db->query("UPDATE drivers SET total_points=0");
            } catch (PDOException $e) {
                die("Error al reiniciar los puntos: " . $e->getMessage());
            }
        }
    }
?>
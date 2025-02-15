<?php
    class Driver {
        private $db;
        private $name;
        private $nationality;
        private $team;
        private $total_points;

        public function __construct($connection) {
            $this->db = $connection;
        }

        public function getClassification() {
            return $this->db->query("SELECT name, total_points FROM drivers ORDER BY total_points DESC, name ASC")->fetchAll();
        }

        public function getTeamPoints() {
            return $this->db->query("SELECT team, SUM(total_points) as points FROM drivers GROUP BY team ORDER BY points DESC")->fetchAll();
        }

        public function getAllIds() {
            return $this->db->query("SELECT id, name FROM drivers")->fetchAll();
        }

        public function addPoints($id, $points) {
            $stmt = $this->db->prepare("UPDATE drivers SET total_points = total_points + ? WHERE id = ?");
            $stmt->execute([$points, $id]);
        }

        public function resetPoints() {
            $this->db->query("UPDATE drivers SET total_points=0");
        }
    }
?>
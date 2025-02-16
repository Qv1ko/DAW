<?php
    namespace Controllers;

    require_once dirname(__DIR__) . "/Models/ConnectionModel.php";
    require_once dirname(__DIR__) . "/Models/DriverModel.php";

    use Models\Connection;
    use Models\Driver;

    class ClassificationController {
        public function showClassification() {
            $connection = Connection::start();
            $driverModel = new Driver($connection);

            $classification = $driverModel->getClassification();
            $teamClassification = $driverModel->getTeamPoints();
        
            require_once dirname(__DIR__) . "/Views/classificationView.php";
        }
    }
?>
<?php
    namespace Controllers;

    require_once dirname(__DIR__) . "/Models/ConnectionModel.php";
    require_once dirname(__DIR__) . "/Models/DriverModel.php";

    use Models\Connection;
    use Models\Driver;

    class ResetPointsController {
        public function resetPoints(): void {
            $connection = Connection::start();
            $driverModel = new Driver($connection);
        
            $driverModel->resetPoints();
        
            header("location: /public/index.php");
            exit;
        }
    }

    $controller = new ResetPointsController();
    $controller->resetPoints();
?>
<?php
    namespace Controllers;

    require_once dirname(__DIR__) . "/Models/ConnectionModel.php";
    require_once dirname(__DIR__) . "/Models/DriverModel.php";

    use Models\Connection;
    use Models\Driver;

    class UpdatePointsController {
        public function updatePoints(): void {
            $connection = Connection::start();
            $driverModel = new Driver($connection);

            $inputData = json_decode(file_get_contents('php://input'), true);

            if (!empty($inputData) && is_array($inputData)) {
                foreach ($inputData as $id => $points) {
                    $obj->addPoints((int)$id, (int)$points);
                }
            } else {
                header('Content-Type: application/json');
                echo json_encode($driverModel->getAllIds());
            }
        }
    }

    $controller = new UpdatePointsController();
    $controller->updatePoints();
?>
<?php
    require_once("../Models/ConnectionModel.php");

    require_once("../Models/DriverModel.php");
    $obj = new Driver(Connection::start());

    $inputData = json_decode(file_get_contents('php://input'), true);

    if (!empty($inputData)) {
        foreach ($inputData as $id => $points) {
            $obj->addPoints($id, $points);
        }        
    } else {
        header('Content-Type: application/json');
        echo json_encode($obj->getAllIds());
    }
?>
<?php
    require_once("./src/Models/ConnectionModel.php");

    require_once("./src/Models/DriverModel.php");
    $obj = new Driver(Connection::start());

    $classification = $obj->getClassification();
    $teamClassification = $obj->getTeamPoints();

    require_once("./src/Views/classificationView.php");
?>
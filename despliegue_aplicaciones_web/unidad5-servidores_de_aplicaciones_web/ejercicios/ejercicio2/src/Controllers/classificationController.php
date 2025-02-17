<?php
    require_once("./src/models/ConnectionModel.php");

    require_once("./src/models/DriverModel.php");
    $obj = new Driver(Connection::start());

    $classification = $obj->getClassification();
    $teamClassification = $obj->getTeamPoints();

    require_once("./src/views/classificationView.php");
?>
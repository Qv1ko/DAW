<?php
    require_once("./src/models/connectionModel.php");

    require_once("./src/models/driverModel.php");
    $obj = new Driver(Connection::start());

    $classification = $obj->getClassification();
    $teamClassification = $obj->getTeamPoints();

    require_once("./src/views/classificationView.php");
?>
<?php
    require_once("./models/connectionModel.php");

    require_once("./models/driverModel.php");
    $obj = new Driver(Connection::start());

    $classification = $obj->getClassification();
    $teamClassification = $obj->getTeamPoints();

    require_once("./views/classificationView.php");
?>
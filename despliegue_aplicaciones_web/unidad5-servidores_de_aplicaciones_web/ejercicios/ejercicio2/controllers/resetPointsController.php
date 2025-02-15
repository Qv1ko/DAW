<?php
    require_once("../models/connectionModel.php");

    require_once("../models/driverModel.php");
    $obj = new Driver(Connection::start());

    $obj->resetPoints();

    header("location:../index.php");
?>
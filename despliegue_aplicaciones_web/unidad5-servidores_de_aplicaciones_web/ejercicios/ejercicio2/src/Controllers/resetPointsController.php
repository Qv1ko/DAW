<?php
    require_once("../Models/ConnectionModel.php");

    require_once("../Models/DriverModel.php");
    $obj = new Driver(Connection::start());

    $obj->resetPoints();

    header("location:../../index.php");
?>
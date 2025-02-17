<?php
    require_once("../models/ConnectionModel.php");

    require_once("../models/DriverModel.php");
    $obj = new Driver(Connection::start());

    $obj->resetPoints();

    header("location:../../index.php");
?>
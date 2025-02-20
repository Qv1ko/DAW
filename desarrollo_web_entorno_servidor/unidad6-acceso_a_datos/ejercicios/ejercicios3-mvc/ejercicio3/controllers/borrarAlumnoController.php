<?php
    require_once("../models/alumnoModel.php");

    $alumno = new Alumno();
    $res_consulta = $alumno->delete_alumno($_POST["id"]);
    require_once("../views/alumnoView.php");
?>
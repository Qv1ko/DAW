<?php
    require_once("../models/alumnoModel.php");

    $alumno = new Alumno();
    $res_consulta = $alumno->insert_alumno($_POST["id"], $_POST["nombre"], $_POST["edad"], $_POST["curso"]);
    require_once("../views/alumnoView.php");
?>
<?php

function deleteCaducados(array $farmacos): array {

    define('SECDIA', 86400);
    $secNow = strtotime(date("Y/m/d"));
    $farmacosValidos = [];

    foreach ($farmacos as $farmaco => $fechaCad) {
        if (strtotime($fechaCad) > $secNow) {
            $farmacosValidos[$farmaco] = $fechaCad;
        } else {
            echo "<p>El farmaco \"" . $farmaco . "\" ha caducado hace " . intval(($secNow - strtotime($fechaCad)) / SECDIA) . " días</p>";
        }
    }

    return $farmacosValidos;

}

function fechaRand(): int {
    return mktime(0, 0, 0, rand(9, 12), rand(1, 28), 2024);
}

?>
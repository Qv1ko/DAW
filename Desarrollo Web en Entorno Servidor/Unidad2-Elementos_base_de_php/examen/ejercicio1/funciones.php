<?php

    function plazasOnline(array $centros, int &$total): void {
        foreach ($centros as $centro => $plazas) {
            $total = $total + $plazas[1];
        }
    }

    function centrosOnline(array $centros): array {
        $co = [];
        foreach ($centros as $centro => $plazas) {
            if ($plazas[1] > 0) {
                array_push($co, $centro);
            }
        }
        return $co;
    }

    function buscarPlazasOnline(array $centros, string $nombreCentro): string {
        $resultadoBusqueda = "<p>Ese centro no existe</p>";
        $exite = false;
        foreach ($centros as $centro => $plazas) {
            if($centro == $nombreCentro){
                $exite = true;
            }
        }
        if ($exite) {
            if ($centros[$nombreCentro][1] > 0) {
                $resultadoBusqueda = "<p>El centro $nombreCentro tiene " . $centros[$nombreCentro][1] . " plazas en de modalidad online</p>";
            } else {
                $resultadoBusqueda = "<p>El centro $nombreCentro no tiene plazas en online</p>";
            }
        }
        return $resultadoBusqueda;
    }

?>
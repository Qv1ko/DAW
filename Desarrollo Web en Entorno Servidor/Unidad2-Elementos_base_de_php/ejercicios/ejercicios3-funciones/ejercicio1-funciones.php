<?php

function componentesNegativos(array $numbers): int {

    $count = 0;

    foreach ($numbers as $number) {
        if ($number < 0) {
            $count++;
        }
    }

    return $count;

}

function componentesMedia(array $numbers): float {
    return array_sum($numbers) / count($numbers);
}

function valoresCuadradoPosicion(array $numbers): string {

    $text = "";

    for ($i = 0; $i < count($numbers); $i++) {
        for ($j = 0; $j < count($numbers); $j++) {
            if ($i * $i == $numbers[$j]) {
                $text = $text . ($text != "" ? ", " : "") . "[" . strval($j) . "] = " . $numbers[$j];
            }
        }
    }

    return $text != "" ? $text : "No se da la circunstancia";

}

function arrayInvertido(array $numbers): array {
    return array_reverse($numbers);
}

function arrayDoble(array $numbers): array {
    return array_map(fn(int $number): int => $number * 2, $numbers);
}

function arrayMitad(array $numbers): array {
    return array_map(fn(int $number): float => $number / 2, $numbers);
}

function ordenarSort(array &$numbers) {
    sort($numbers);
    array_push($numbers, rand(-17, 17));
    sort($numbers);
}

function ordenarRsort(array &$numbers) {
    rsort($numbers);
    array_push($numbers, rand(-17, 17));
    rsort($numbers);
}

function buscar(array $numbers, mixed $value): string {
    return "El valor $value" . (in_array($value, $numbers) ? " se a encontrado" : " no se a encontrado");
}

function buscarEstricto(array $numbers, mixed $value): string {
    return "El valor $value" . (!is_bool(array_search($value, $numbers, true)) ? " se a encontrado en la posición " . array_search($value, $numbers, true) . " del array": " no se a encontrado");
}

function incrementarDos(array &$numbers) {
    array_push($numbers, rand(-17, 17), rand(-17, 17));
}

function borrarUltimoValor(array &$numbers) {
    // unset($numbers[count($numbers) - 1]);
    array_pop($numbers);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

        /*
         * Diseña una clase para almacenar información sobre equipos, dispositivos, susceptibles de reparación.
         * De cada uno de ellos:
         * - Código: identificador del dispositivo
         * - Tipo: ej: ordenador, pantalla, teclado, ratón.
         * - Ubicación: ej: aula 25, biblioteca, departamento informática.
         * Métodos a implementar:
         * - Constructor
         * - Mostrar la ubicación si son de un tipo concreto
         * Diseña un array de 4 objetos y e invita a los métodos anteriores utilizando la librería SPL.
         */

        require_once("./ejercicio7-dispositivo.php");

        use a7dispositivo as Di;

        $d1 = new Di\Dispositivo("04R", "pantalla", "aula 25");
        $d2 = new Di\Dispositivo("26F", "ordenador", "aula 24");
        $d3 = new Di\Dispositivo("10T", "ratón", "aula 26");
        $d4 = new Di\Dispositivo("15T", "ordenador", "aula 26");

        $dispositivos = [$d1, $d2, $d3, $d4];

        $iterador = new RecursiveArrayIterator($dispositivos);
        var_dump($iterador);
        echo "<br>";
        foreach ($iterador as $dispositivo) {
            echo $dispositivo->ubicacion() . "<br>";
        }

        reset($dispositivos);
        while ($dispositivo = current($dispositivos)) {
            echo $dispositivo->ubicacion() . "<br>";
            next($dispositivos);
        }

    ?>
</body>

</html>
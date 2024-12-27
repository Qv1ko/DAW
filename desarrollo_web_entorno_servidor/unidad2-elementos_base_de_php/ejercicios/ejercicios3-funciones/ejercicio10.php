<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 10</title>
</head>

<body>
    <?php

        /*
         * Crea una función para visualizar la tabla de multiplicar de un número previamente inicializado a un valor entero.
         * - Pasar el número como parámetro y visualizar la tabla en la función.
         * - Pasar el número como parámetro y obtener el resultado a través de un string y la sentencia return.
         * - Pasar el número como parámetro y obtener el resultado a través de un string y el paso de parámetro por referencia.
         */

        require_once("./php/ejercicio10-funciones.php");
        
        $number = rand(0, 10);

        echo "<p>Tabla de multiplicar dentro de la función</p>";
        visualizarTablaMultiplicar($number);
        echo "<br>";
        echo "<p>Tabla de multiplicar por return</p>";
        echo tablaMultiplicar($number);
        echo "<br>";
        echo "<p>Tabla de multiplicar por referencia</p>";
        $result = "";
        tablaMultiplicarReferencia($number, $result);
        echo $result;

    ?>
</body>

</html>
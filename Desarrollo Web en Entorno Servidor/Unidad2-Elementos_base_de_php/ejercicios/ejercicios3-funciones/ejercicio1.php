<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php

        require_once('./actividad1-funciones.php');
        
        $numbers = array(rand(-17, 17), rand(-17, 17), rand(-17, 17), rand(-17, 17), rand(-17, 17));

        print_r($numbers);
        echo "<br><br>";
        echo "<p>Número de componentes negativos: " . componentesNegativos($numbers) . "</p>";
        echo "<p>La media de los componentes: " . componentesMedia($numbers) . "</p>";
        echo "<p>Posiciciones en las que se almacena como valor el cuadrado de su posición: " . valoresCuadradoPosicion($numbers) . "</p>";
        echo "<p>Array en orden invertido: " . implode(", ", arrayInvertido($numbers)) . "</p>";
        echo "<p>Valores dobles del array: " . implode(", ", arrayDoble($numbers)) . "</p>";
        echo "<p>Mitad de los valores del array: " . implode(", ", arrayMitad($numbers)) . "</p>";
        ordenarSort($numbers);
        echo "<p>Ordenación con sort(): " . implode(", ", $numbers) . "</p>";
        ordenarRsort($numbers);
        echo "<p>Ordenación con rsort(): " . implode(", ", $numbers) . "</p>";
        echo "<p>Resultado de la busqueda: " . buscar($numbers, "3") . "</p>";
        echo "<p>Resultado de la busqueda estricta: " . buscarEstricto($numbers, 7) . "</p>";
        incrementarDos($numbers);
        echo "<p>La media de los componentes despues de incrementar en dos el array: " . componentesMedia($numbers) . "</p>";
        borrarUltimoValor($numbers);
        echo "<p>Array despues de borrar el ultimo valor: " . implode(", ", $numbers) . "</p>";

    ?>
</body>

</html>
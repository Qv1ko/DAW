<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 1</title>
</head>

<body>
    <?php

        /*
         * A partir del array indexado o numérico del ejercicio 1 del listado de actividades
         *  anterior crea una función para cada apartado:
         * - Muestra el número de componentes negativas.
         * - Muestra la media de las componentes.
         * - Visualiza las posiciones del array en las que se almacene como valor el cuadrado de su
         *    posición. Si no se da esta circunstancia en ninguna componente, indícalo con un
         *    sencillo mensaje.
         * - Visualizar el array en orden invertido.
         * - Crear dos nuevos arrays: uno cuyas componentes almacenen como valor el doble de los
         *    componentes del array original de este ejercicio y otro cuyas componentes almacenen
         *    la mitad del valor de las componentes originales. Utiliza array_map() y funciones variable.
         * - Ordena sus componentes utilizando la función sort() y rsort(); a continuación, inserta
         *    un nuevo valor sin perder el orden en el vector.
         * - Busca un valor concreto, utilizando las funciones in_array() o array_search(), con y
         *    sin coincidencia de tipos.
         * - Incrementa en dos más sus componentes y calcula de nuevo la media de ellas.
         * - Elimina la última componente con unset() o con array_pop()
         * Para ello, crea una librería con las funciones diseñadas e incluye la librería en el
         *  script principal. Las sentencias de visualización no se incluirán en los códigos de las
         *  funciones diseñadas sino en el script principal.
         */

        require_once('./php/ejercicio1-funciones.php');
        
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
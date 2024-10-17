<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>
    <?php

        require_once("./ejercicio10-funciones.php");
        
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
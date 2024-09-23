<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 2</title>
</head>

<body>
    <?php

        $num = 4;
        echo var_dump($num);
        $num = 4.5;
        echo var_dump($num);
        $nombre = 'Esther';
        echo var_dump($nombre);
        $otro = NULL;
        echo var_dump($otro);
        $estado = true;
        echo var_dump($estado);

        foreach ($_SERVER as $componente => $valor) {
            echo "$componente: $valor <br>";
        }

        echo $_SERVER['HTTP_HOST'] , "<br>";

        $una_variable = 10;
        $nombre_variable = "una_variable";
        echo $$nombre_variable;

        $dato = 'aula'; var_dump($dato);
        echo "<br>\"{$dato}s\"";

        $num1 = 5;
        $num2 = &$num1; // Referencia a num1 (comparten el mismo espacio de memoria)
        // Se puede cambiar la refecia de la variable
        // $num2 = &$dato;
        
        // asignar el valor de la variable no nula
        $var2 = "texto";
        $var3 = $var1 ?? $var2;

        /* Operador de comparación combinado
         * a < b -> -1
         * a == b -> 0
         * a > b -> 1
         */
        echo $a <=> $b;

    ?>
</body>

</html>
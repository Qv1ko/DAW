<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 7</title>
</head>

<body>
    <?php

        suma(3, 8);
        suma(3);

        function suma(int $a, int $b = 5) {
            return $a + $b;
        }

        function producto(&$resultado) {
            switch (func_num_args()) {
                case 1:
                    $resultado = 0;
                    break;
                
                default:
                    $parametros = func_get_args();
                    unset($parametros[0]);
                    $resultado = 1;
                    foreach ($parametros as $parametro) {
                        $resultado *= $parametro;
                    }
                    break;
            }
        }

        producto($resultado);
        echo 'producto($resultado) => ', $resultado, '<br>';
        producto($resultado, 1, 2, 3);
        echo 'producto($resultado, 1, 2, 3) => ', $resultado, '<br>';
        producto($resultado, 1, 2, 3, 4, 5);
        echo 'producto($resultado, 1, 2, 3, 4, 5) => ', $resultado, '<br>';

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clase 10</title>
</head>

<body>
    <?php
        
        $numeros = array(2, 4, 5, 8);

        function doblar(int $n) {
            return $n * 2;
        }

        function triplicar(int $n) {
            return $n * 3;
        }

        $operaciones = array('doblar', 'triplicar');

        foreach ($operaciones as $operacion) {
            $array_ope = array_map($operacion, $numeros);
            print_r($array_ope);
            echo "<br>";
        }

    ?>
</body>

</html>
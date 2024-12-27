<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 18</title>
</head>

<body>
    <?php

        /*
         * Muestra los fármacos que están caducados.
         * Es necesario crear un array con 5 fármacos, de cada uno se almacena su nombre y la fecha
         *  de caducidad.
         * Utiliza una función que reciba el array y le devuelva sin los fármacos caducados.
         */

        require_once('./php/ejercicio18-funciones.php');

        $farmacos = [
            "Azacitidina" => date("Y/m/d", fechaRand()),
            "Ciclosporina" => date("Y/m/d", fechaRand()),
            "Docetaxel" => date("Y/m/d", fechaRand()),
            "Fulvestrant" => date("Y/m/d", fechaRand()),
            "Pentostatina" => date("Y/m/d", fechaRand()),
        ];

        $farmacos = deleteCaducados($farmacos);

        echo "<p>Farmacos disponibles actualmente: </p>";
        foreach ($farmacos as $farmaco => $fechaCad) {
            echo "<p>- $farmaco</p>";
        }

    ?>
</body>

</html>
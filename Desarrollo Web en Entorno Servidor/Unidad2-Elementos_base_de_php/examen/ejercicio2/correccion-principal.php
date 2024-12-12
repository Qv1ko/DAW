<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Principal</title>
</head>

<body>
    <?php

        require_once("./familia.php");
        require_once("./correccion-familiagastos.php");

        // Función A
        $miFamilia = new CFamiliaGastos(rand(0, 2000), rand(2, 6), ["Recibos", "Ocio", "Alimentación"]);


        // Función B
        echo "<p>El gasto total de mi familia el $miFamilia->mes/$miFamilia->ano es de " . $miFamilia->importeTotalGastos() . "€</p>";


        // Función C
        $ahorro = 0;
        $miFamilia->ahorroMensual($ahorro);
        echo "<p>" . ($ahorro > 0 ? "Durante el mes $miFamilia->mes de $miFamilia->ano mi familia ahorro $ahorro" . "€" : "La familia tiene un saldo negativo") . "</p>";

    ?>
</body>

</html>
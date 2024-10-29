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
        require_once("./familiagastos.php");

        // Función A
        $miFamilia = new FamiliaGastos(rand(0, 2000), rand(2, 6), ["Recibos", "Ocio"]);


        // Función B
        echo "<p>El gasto total de mi familia el $miFamilia->mes/$miFamilia->ano es de " . $miFamilia->importeTotalGastos() . "€</p>";


        // Función C
        $ahorro = 0;
        $miFamilia->ahorroMensual($ahorro);
        echo "<p>" . ($ahorro > 0 ? "Durante el mes $miFamilia->mes de $miFamilia->ano mi familia ahorro $ahorro" . "€" : "La familia tiene un saldo negativo") . "</p>";


        // Pruebas
        // $otraFamilia = new FamiliaGastos(rand(0, 2000), rand(2, 6), [rand(0, 175), rand(0, 75), rand(0, 125), rand(0, 85)]);
        // echo "<p>El gasto total de otra familia el $otraFamilia->mes/$otraFamilia->ano es de " . $otraFamilia->importeTotalGastos() . "€</p>";
        // $otraFamilia->ahorroMensual($ahorro);
        // echo "<p>" . ($ahorro > 0 ? "Durante el mes $otraFamilia->mes de $otraFamilia->ano otra familia ahorro $ahorro" . "€" : "La otra familia tiene un saldo negativo") . "</p>";

    ?>
</body>

</html>
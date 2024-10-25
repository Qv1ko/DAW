<?php namespace e4main; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>

    <?php

        use e4joven as Jo;
        use e4adulto as Ad;

        require_once("./ejercicio4-adulto.php");
        require_once("./ejercicio4-joven.php");

        $joven1 = new Jo\Joven("12345678R", 17);

        echo $joven1->ayudas() . "<br>";
        echo $joven1->mensaje() . "<br>";

        $joven2 = new Jo\Joven("99999999R", 18);

        echo $joven2->ayudas() . "<br>";
        echo $joven2->mensaje() . "<br>";

        $adulto1 = new Ad\Adulto("Miguel", "Profesor", "La Salle");

        echo $adulto1->ayudas() . "<br>";
        echo $adulto1->mensaje() . "<br>";

        $adulto2 = new Ad\Adulto("Ana", "Profesor", "CIFP Juan de Colonia");

        echo $adulto2->ayudas() . "<br>";
        echo $adulto2->mensaje() . "<br>";

        $adulto3 = new Ad\Adulto("Pepe", "Mecanico", "TallerBUR");

        echo $adulto3->ayudas() . "<br>";
        echo $adulto3->mensaje() . "<br>";

        echo $joven1::CONSTANTE . "<br>";

        echo $adulto1::$valor . "<br>";
        $adulto1->modificar_static();
        echo $adulto2::$valor . "<br>";

        echo $adulto3->otros();

    ?>

</body>

</html>
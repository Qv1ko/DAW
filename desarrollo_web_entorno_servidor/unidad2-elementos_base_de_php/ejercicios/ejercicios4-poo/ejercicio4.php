<?php namespace e4main; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 4</title>
</head>

<body>

    <?php

        /*
         * Crea una nueva clase abstracta que incluya:
         * - Una constante ( CONSTANTE='Todos')
         * - Una variable estática ($valor=1)
         * - Cuatro métodos:
         *   - ayudas(), abstracto
         *   - mensaje(), abstracto
         *   - modificar_static, estático (incrementar $valor en 1)
         *   - otros(), publico (sólo devolverá el mensaje "Todos sois buena gente").
         * Crea la clase Joven y Adulto que extiendan de la clase Abstracta e implementa los métodos abstractos.
         * En la clase Joven (atributos:identificador del joven y edad).
         * - Ayuda(), comprobará la edad el joven y si es 18 retornará un mensaje "400 euros"
         * - Mensaje(), retornará un mensaje "Estás en la mejor edad. Disfruta"
         * En la clase Adulto (atributos nombre, profesión y empresa en la que trabaja).
         * - Ayuda(), si es "profesor" de profesión, retornar "0 euros"
         * - Mensaje(), si es "profesor" y la empresa es "CIFP Juan de Colonia", retornar el mensaje "es
         *    una buena opción"
         * Comprueba desde un script diferentes accesos.
         */

        require_once("./php/ejercicio4-abstracta.php");
        require_once("./php/ejercicio4-adulto.php");
        require_once("./php/ejercicio4-joven.php");

        use e4abstracta as Ab;
        use e4joven as Jo;
        use e4adulto as Ad;

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
        echo Ab\Abstracta::CONSTANTE . "<br>";

        echo $adulto1::$valor . "<br>";
        $adulto2::modificar_static();
        Ab\Abstracta::modificar_static();
        echo Jo\Joven::$valor . "<br>";

        echo $adulto3->otros();

    ?>

</body>

</html>
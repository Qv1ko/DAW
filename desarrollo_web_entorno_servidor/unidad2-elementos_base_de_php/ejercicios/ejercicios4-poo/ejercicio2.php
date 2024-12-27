<?php namespace ejercicio2; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 2</title>
</head>

<body>
    <?php

        /*
         * Crea una clase denominada Becado que se extiende de la clase Alumno.
         * Está clase contará con un nuevo atributo tipo float, importebeca.
         * Construye un objeto y visualiza sus datos.
         */

        require_once("./php/ejercicio2-alumno.php");
        require_once("./php/ejercicio2-becado.php");

        use ejercicio2\alumno as Al;
        use ejercicio2\becado as Be;

        $alumno1 = new Al\Alumno("Esther", 26);
        echo "<p>" . $alumno1->visualizar() . "</p>";

        $alumno2 = new Be\Becado("Javier", 20, 1000);
        echo "<p>" . $alumno2->visualizar() . "</p>";

    ?>
</body>

</html>
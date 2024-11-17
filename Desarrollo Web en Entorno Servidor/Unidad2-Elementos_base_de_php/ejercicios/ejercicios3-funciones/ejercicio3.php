<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 3</title>
</head>

<body>
    <?php

        /*
         * Utiliza la función explode e implode y crea:
         * - Un array asociativo que almacene los colores a partir del siguiente string: "rojoverde-azul-amarillo".
         * - Ejecuta echo $persona, una vez creado el string $persona a partir del siguiente array ("Pedro",
         *    "González","López").
         */

        $str = "rojo-verde-azul-amarillo";
        $info = array("Pedro", "González", "López");

        echo "<p>Array de colores</p>";
        print_r(explode('-', $str));

        echo "<p>String de \$persona: " . implode(" ", $info) . "</p>";

    ?>
</body>

</html>
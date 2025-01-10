<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 3</title>
</head>

<body>
    <?php
        require_once("./php/ejercicio3-crearCookie.php");
        require_once("./php/ejercicio3-borrarCookie.php");

        crearCookie();

        if (isset($_COOKIE['prueba'])) {
            echo "Cookie '" . $_COOKIE['prueba'] . "' esta activa";
        } else {
            echo "No hay cookies activas";
        }

        // borrarCookie();
    ?>
</body>

</html>
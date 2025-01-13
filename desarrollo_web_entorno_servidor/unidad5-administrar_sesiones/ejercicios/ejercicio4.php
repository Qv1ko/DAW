<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 4</title>
</head>

<body>

    <!--
        Implementar el control de visitas a una página utilizando una cookie sencilla.
    -->

    <?php
        if (isset($_COOKIE["views"])) {
            setcookie("views", strval(intval($_COOKIE["views"]) + 1), time() + 3600);
        } else {
            setcookie("views", "1", time() + 3600);
            header("Refresh:0");
        }
    ?>

    <h2>Visitas totales: <?php echo (isset($_COOKIE["views"]) ? $_COOKIE["views"] : "1"); ?></h2>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

    <!--
        Diseñar una aplicación web utilizando MVC para que a partir de un menú de consultas a
         realizar sobre la base de datos cinema se muestren los resultados adecuadamente.
        - Películas dramáticas mostrará un listado de los títulos de las películas de ese género.
        - Nombre de actrices mostrará los nombres de las actrices.
        - Actores de una determinada nacionalidad, nos llevará a un desplegable que muestre las
           nacionalidades disponibles en la base de datos para elegir una. Una vez elegida, mostrar
           el número de actores de una determinada nacionalidad
        - Películas en las que interviene un actor, mostrará los títulos de las películas en la que
           interviene un actor cuyo nombre habrá sido solicitado previamente en un formulario.
    -->

    <?php
        require_once("./lib/funciones.php");
        require_once("./views/elegir.php");
    ?>

</body>

</html>
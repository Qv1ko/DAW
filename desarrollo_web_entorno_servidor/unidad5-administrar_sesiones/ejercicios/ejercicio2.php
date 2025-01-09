<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>

    <!--
        Pequeña aplicación con tres páginas web: 
        - Página 1: Genera un número aleatorio del 0 al 4.
        - Página 2: Crear un array de nombres: Marcos, Ana, Silvia, Pedro, Antonio. Obtener el nombre
           almacenado en el array a partir de la posición indicada por el número aleatorio generado.
        - Página 3: Visualizar la información como se muestra en el ejemplo. Si el nombre es Antonio, habrá
           premio si no, habrá que intentarlo de nuevo.
    -->

    <?php
        session_start();
        $_SESSION['number'] = rand(0, 4);
    ?>

    <h1>¡¡JUEGA Y CONSIGUE TU PREMIO!!</h1>
    <a href="./ejercicio2-nombres.php">
        <button>seguir</button>
    </a>

</body>

</html>
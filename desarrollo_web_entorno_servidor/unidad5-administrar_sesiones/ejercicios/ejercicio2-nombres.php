<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php
        session_start();
        $_SESSION["names"] = ["Marcos", "Ana", "Silvia", "Pedro", "Antonio"];
        $_SESSION["name"] = $_SESSION["names"][$_SESSION["number"]]
    ?>

    <h2>¡¡Sigue jugando!!</h2>
    <a href="./php/ejercicio2-resultado.php">
        <button>seguir</button>
    </a>

</body>

</html>
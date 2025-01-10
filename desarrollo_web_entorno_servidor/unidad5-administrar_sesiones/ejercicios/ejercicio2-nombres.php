<!DOCTYPE html>
<html lang="en">

<head>
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
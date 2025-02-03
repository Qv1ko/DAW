<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de actores</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <?php
        echo "<form action='./controller_actor.php' method='post'>";
        echo "<label for='actor'>Elige un actor:</label>";
        echo "<select name='actor' id='actor'>";

        foreach ($actores as $id => $actor) {
            echo "<option value=$id>$actor</option>";
        }

        echo "</select>";
        echo "<button>continuar</button>";
        echo "</form>";
    ?>

</body>

</html>
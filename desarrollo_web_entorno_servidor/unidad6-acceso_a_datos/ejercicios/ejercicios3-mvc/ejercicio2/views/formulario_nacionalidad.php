<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de nacionalidad</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <?php
        echo "<form action='./nacionalidades.php' method='post'>";
        echo "<label for='nacionalidad'>Elige una nacionalidad:</label>";
        echo "<select name='nacionalidad' id='nacionalidad'>";

        foreach ($nacionalidades as $nacionalidad) {
            echo "<option value=$nacionalidad>$nacionalidad</option>";
        }

        echo "</select>";
        echo "<button>continuar</button>";
        echo "</form>";
    ?>

</body>

</html>
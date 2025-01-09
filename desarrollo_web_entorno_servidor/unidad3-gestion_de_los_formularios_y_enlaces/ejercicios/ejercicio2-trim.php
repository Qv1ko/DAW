<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 2 - Validación con TRIM</title>
    <?php

        /*
         * Crea pequeños scripts que incluyan un formulario y cada uno de los controles de PHP.
         */

        $respuesta = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $respuesta = "El valor \"" . $_POST["input"] . "\" es igual a \"" . trim($_POST["input"]) . "\"";
        }
    ?>
</head>

<body>
    <h2>Validación con TRIM</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Introduce valor con espacios:<input type="text" name="input">
        <p><?php echo $respuesta;?></p>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
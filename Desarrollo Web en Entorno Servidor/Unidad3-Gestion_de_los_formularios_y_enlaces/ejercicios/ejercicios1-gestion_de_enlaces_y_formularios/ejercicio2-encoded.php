<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 2 - Sanetización con ENCODED</title>
    <?php

        /*
         * Crea pequeños scripts que incluyan un formulario y cada uno de los controles de PHP.
         */

        $respuesta = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $respuesta = "El valor \"" . $_POST["input"] . "\" es igual a \"" . filter_var($_POST["input"], FILTER_SANITIZE_ENCODED) . "\"";
        }
    ?>
</head>

<body>
    <h2>Sanetización con ENCODED</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Introduce un valor con carácteres especiales:<input type="text" name="input">
        <p><?php echo $respuesta;?></p>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
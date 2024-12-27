<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 2 - Validación de float</title>
    <?php

        /*
         * Crea pequeños scripts que incluyan un formulario y cada uno de los controles de PHP.
         */

        $respuesta = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $respuesta = filter_var($_POST["input"], FILTER_VALIDATE_FLOAT) ? "El valor \"" . $_POST["input"] . "\" es correcto" : "El valor \"" . $_POST["input"] . "\" es incorrecto";
        }
    ?>
</head>

<body>
    <h2>Validación de float</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Introduce un número flotante:<input type="text" name="input">
        <p><?php echo $respuesta;?></p>fire
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
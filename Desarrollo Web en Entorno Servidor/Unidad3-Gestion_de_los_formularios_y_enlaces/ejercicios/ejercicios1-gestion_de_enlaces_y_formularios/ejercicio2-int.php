<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 2 - Validación de int</title>
    <?php

        /*
         * Crea pequeños scripts que incluyan un formulario y cada uno de los controles de PHP.
         */

        $respuesta = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $respuesta = filter_var($_POST["input"], FILTER_VALIDATE_INT) ? "El valor \"" . $_POST["input"] . "\" es correcto" : "El valor \"" . $_POST["input"] . "\" es incorrecto";
        }
    ?>
</head>

<body>
    <h2>Validación de int</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Introduce un número entero:<input type="text" name="input">
        <p><?php echo $respuesta;?></p>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
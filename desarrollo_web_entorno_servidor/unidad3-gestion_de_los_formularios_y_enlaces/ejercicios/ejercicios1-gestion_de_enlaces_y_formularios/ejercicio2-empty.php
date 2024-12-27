<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 2 - Validación con empty</title>
    <?php

        /*
         * Crea pequeños scripts que incluyan un formulario y cada uno de los controles de PHP.
         */

        $respuesta = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $respuesta = !empty($_POST["input"]) ? "El valor \"" . $_POST["input"] . "\" es correcto" : "El valor \"" . $_POST["input"] . "\" es incorrecto";
        }
    ?>
</head>

<body>
    <h2>Validación con empty</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Introduce un valor:<input type="text" name="input">
        <p><?php echo $respuesta;?></p>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
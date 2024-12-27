<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 2 - Validación de email y sanetización</title>
    <?php

        /*
         * Crea pequeños scripts que incluyan un formulario y cada uno de los controles de PHP.
         */

        $respuesta = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = filter_var($_POST["input"], FILTER_SANITIZE_EMAIL);
            $respuesta = filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL) ? "El valor \"" . $email . "\" es correcto" : "El valor \"" . $email . "\" es incorrecto";
        }
    ?>
</head>

<body>
    <h2>Validación de email y sanetización</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Introduce un email:<input type="text" name="input">
        <p><?php echo $respuesta;?></p>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
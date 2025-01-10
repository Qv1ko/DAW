<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 13</title>
</head>

<body>

    <!--
        Adapta a la programación orientada a objetos el ejercicio 7.
    -->

    <?php

        require_once("./php/ejercicio13-validador.php");

        if (isset($_POST["respuesta"]) && !empty($_POST['respuesta'])) {
            $validador = new Validador;

            $valor = $validador->sanitizar($_POST["respuesta"]);
            $validador->validacion($valor);

            if ($validador->correcto) {
                exit("Fin de aplicación");
            }
        }

    ?>

    <h3>¿De qué color es el caballo blanco de Santiago?</h3>
    <form action="" method="POST">
        <input type="text" name="respuesta" placeholder="Escribe tu respuesta">
        <input type="submit" value="Enviar respuesta">
    </form>

</body>

</html>
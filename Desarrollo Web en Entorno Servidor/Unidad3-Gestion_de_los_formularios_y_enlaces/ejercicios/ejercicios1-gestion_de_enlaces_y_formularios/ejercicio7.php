<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 7</title>
</head>

<body>

    <!--
        Añade validación al string tecleado en el ejercicio 6 y permite mostrar de nuevo el
         formulario si el string no es correcto.
    -->

    <?php

        require_once("./ejercicio7-funciones.php");

        if (isset($_POST["respuesta"]) && !empty($_POST['respuesta'])) {
            $valor = sanitizar($_POST["respuesta"]);
            $correcto = false;
            echo validacion($valor, $correcto);
            if ($correcto) {
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
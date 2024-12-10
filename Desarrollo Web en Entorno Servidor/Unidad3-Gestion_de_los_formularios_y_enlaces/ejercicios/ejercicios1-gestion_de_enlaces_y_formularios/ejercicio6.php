<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 6</title>
</head>

<body>

    <!--
        ¿De qué color es el caballo blanco de Santiago? Crea un formulario que capture un string; tanto
         si aciertas como si no, visualiza un mensaje indicándolo. Este pequeño tratamiento estará
         incluido en la misma página web que el formulario. Utiliza el método POST.
    -->

    <?php
        if (isset($_POST["respuesta"]) && !empty($_POST['respuesta'])) {
            if (strtolower(trim($_POST["respuesta"])) == "blanco") {
                echo '<p>¡Repuesta correcta!</p>';
            } else {
                echo '<p>Intententalo de nuevo...</p>';
            }
        }
    ?>

    <h3>¿De qué color es el caballo blanco de Santiago?</h3>
    <form action="" method="POST">
        <input type="text" name="respuesta" placeholder="Escribe tu respuesta">
        <input type="submit" value="Enviar respuesta por POST">
    </form>

</body>

</html>
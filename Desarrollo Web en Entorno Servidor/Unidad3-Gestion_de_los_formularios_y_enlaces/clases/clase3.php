<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clase 3</title>
</head>

<body>

    <?php
        if (isset($_POST["respuesta"]) && !empty($_POST['respuesta'])) {
            if (strtolower(trim($_POST["respuesta"])) == "blanco") {
                echo '<p>¡Repuesta correcta!</p>';
                exit("Fin de aplicación");
            } else {
                echo $_POST['respuesta'];
                echo htmlspecialchars($_POST['respuesta']);
                echo '<p>Intententalo de nuevo...</p>';
            }
        }
    ?>

    <h2>Formulario a prueba de scripts</h2>
    <h3>¿De qué color es el caballo blanco de Santiago?</h3>
    <form action="" method="POST">
        <input type="text" name="respuesta" value="<?php echo 'xxxx';?>" placeholder="Escribe tu respuesta">
        <input type="submit" value="Enviar respuesta por POST">
    </form>

</body>

</html>
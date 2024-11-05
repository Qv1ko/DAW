<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5</title>
</head>

<body>
    <h2>¿De qué color es el caballo blanco de Santiago?</h2>
    <form action="ejercicio5-captura.php" method="get">
        <input type="text" name="respuesta" placeholder="Escribe tu respuesta">
        <input type="submit" value="Enviar respuesta por GET">
    </form>
    <br>
    <form action="ejercicio5-captura.php" method="post">
        <input type="text" name="respuesta" placeholder="Escribe tu respuesta">
        <input type="submit" value="Enviar respuesta por POST">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Actividad 5</title>
</head>

<body>

    <!--
        ¿De qué color es el caballo blanco de Santiago?
        Crea un formulario que capture un string, tanto si aciertas como si no, visualiza un mensaje
         indicándolo. Este pequeño tratamiento estará incluido en otra página web (atributo action de <form>).
        Utiliza:
         - Método GET
         - Método POST
    -->

    <h2>¿De qué color es el caballo blanco de Santiago?</h2>
    <form action="./php/ejercicio5-captura.php" method="get">
        <input type="text" name="respuesta" placeholder="Escribe tu respuesta">
        <input type="submit" value="Enviar respuesta por GET">
    </form>
    <br>
    <form action="./php/ejercicio5-captura.php" method="post">
        <input type="text" name="respuesta" placeholder="Escribe tu respuesta">
        <input type="submit" value="Enviar respuesta por POST">
    </form>
</body>

</html>
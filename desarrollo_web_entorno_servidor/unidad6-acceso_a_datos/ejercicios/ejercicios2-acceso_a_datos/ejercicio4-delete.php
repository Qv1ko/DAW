<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Delete</title>
    <link rel="stylesheet" href="./css/ejercicio4.css">
</head>

<body>

    <!--
        Diseña una interface asociada a un CRUD para:
        - Insertar un nuevo alumno
        - Consultar la información de un alumno (a partir de la edad y el código del curso)
        - Modificar la edad de un alumno (lo limitaremos a su nombre)
        - Suprimir un alumno (a partir del código del alumno)
    -->

    <?php
        require_once("./php/ejercicio4-funciones.php");

        if (isset($_POST["id"])) {
            echo deleteAlum($_POST["id"]);
        }
    ?>

    <form action="#" method="post">
        <div class="title">
            <h3>Eliminar alumno</h3>
        </div>
        <label for="id">ID del alumno</label>
        <input type="text" name="id" id="id">
        <br>
        <button type="submit">Eliminar alumno</button>
    </form>
</body>

</html>
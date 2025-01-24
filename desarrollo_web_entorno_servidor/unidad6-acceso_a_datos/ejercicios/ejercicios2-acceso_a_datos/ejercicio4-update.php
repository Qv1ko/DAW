<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Update</title>
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

        if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["edad"])) {
            updateAlum($_POST["id"], $_POST["nombre"], $_POST["edad"]);
        }
    ?>

    <form action="#" method="post">
        <div class="title">
            <h3>Actualizar alumno</h3>
        </div>
        <label for="id">ID del alumno</label>
        <input type="text" name="id" id="id">

        <label for="nombre">Nuevo nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Luis Palacios">

        <label for="edad">Nueva edad</label>
        <input type="text" name="edad" id="edad">

        <br>
        <button type="submit">Actualizar alumno</button>
    </form>

</body>

</html>
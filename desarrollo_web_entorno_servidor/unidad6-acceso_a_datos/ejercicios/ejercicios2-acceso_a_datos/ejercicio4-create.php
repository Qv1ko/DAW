<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Create</title>
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

        if (isset($_POST["nombre"]) && isset($_POST["edad"]) && isset($_POST["curso"])) {
            $nombre = trim($_POST["nombre"]);
            $curso = ($_POST["curso"] == "primero") ? 1 : 2;

            createAlum($nombre, $_POST["edad"], $curso);
        }
    ?>

    <form action="#" method="post">
        <div class="title">
            <h3>Crear alumno</h3>
        </div>
        <label for="nombre">Nombre del alumno</label>
        <input type="text" name="nombre" id="nombre" placeholder="Luis Palacios">

        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad">

        <label>Curso</label>
        <input type="radio" name="curso" id="primero"><label class="no-block" for="primero">1º Curso</label><br>
        <input type="radio" name="curso" id="segundo"><label class="no-block" for="segundo">2º Curso</label>

        <br>
        <button type="submit">Crear alumno</button>
    </form>

</body>

</html>
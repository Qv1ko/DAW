<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>

    <!--
        Utilizando la base de datos ciclos, realizar las operaciones típicas:
         - Establecer la conexión con la BD
         - Realizar lo operación correspondiente sobre la BD (pueden ser las consultas sencillas
            planteadas sobre esta BD):
           - Datos de los alumnos que tengan 18 años
           - Nombre y edad de los alumnos que tengan 18 años
           - Nombre de los alumnos que no tengan 18 años
           - Edad del alumno que se llama Jorge
           - Datos de los alumnos cuyo código de alumno no sea NULL
           - Nombre de los alumnos que tengan o 18 años o 21
           - Nombre de los alumnos que tengan entre 18 y 21 (ambos inclusives)
         - Liberar la conexión con la BD.
    -->

    <?php
        echo "<p>--- Opción procedimental ---</p>";
        require_once("./php/ejercicio1-procedimental.php");

        echo "<p>--- Opción POO ---</p>";
        require_once("./php/ejercicio1-poo.php");
        
        echo "<p>--- Opción PDO ---</p>";
        require_once("./php/ejercicio1-pdo.php");
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>

    <!--
        Amplia la BD ciclos, con dos nuevas tablas: módulo y notas.
         - La tabla módulo tendrá como atributos el código del módulo (denominación abreviada, será
            PRIMARY KEY) y el número de horas lectivas del módulo. Los tipos de los campos serán
            los que tú consideres oportunos.
         - La tabla notas, almacenará la calificación final obtenida por un alumno en un módulo.
            Ten en cuenta que cada alumno tiene una calificación en cada módulo.
        Inserta información en las nuevas tablas.
        Añadade una opción nueva a la interface de la actividad 4 (Otras consultas) que nos muestre
         un listado de los alumnos aprobados y sus calificaciones finales o un listado con los
         datos de los alumnos que han aprobado mí módulo.
    -->

    <?php
        require_once("./php/ejercicio5-clasificaciones.php");
    ?>

</body>

</html>
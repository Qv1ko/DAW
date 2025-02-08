<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
    <!--
        Diseña un CRUD para la gestión de unas oposiciones a profesores.
        Subsanaciones: Tras los resultados de las oposiciones y finalizado el plazo de reclamaciones se deben modificar las calificaciones del examen teórico de los opositores recogidos en el fichero subsanaciones.txt
        Consultas:
        - Con plaza: Se listarán los datos de los opositores que han superado las dos pruebas (teoría y práctica).
        - Bolsa trabajo: se listarán los códigos de los opositores que sólo hayan superado una prueba.
        - No aptos: se mostrará el número de no aptos (opositores que no superan ninguna prueba).
        Inserciones: Hay que diseñar un formulario para recoger los tres datos del opositor y registrarlos en la BD.
        Borrados: Se precisa de un formulario que recoja el código del opositor para ser dado de baja en la BD. (consulta parametrizada)
    -->

    <?php
        require_once("./views/vista.php");
    ?>

</body>
</html>
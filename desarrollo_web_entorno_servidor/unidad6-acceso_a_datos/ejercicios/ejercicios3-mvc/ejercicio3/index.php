<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <!--
        Prueba el código de los apuntes a modo de ejemplo práctico:
        - Implementa las opciones incluidas en el controller.php.
        - Tras la implementación de las opciones anteriores, diseña el controller.php completo.
        - Implementa la vista, el controlador y el modelo para incluir el procesamiento de la
            información del resto de las tablas de la BBDD.
    -->

    <?php
        $display = "block";

        if (isset($_POST["tabla"])) {
            switch ($_POST["tabla"]) {
                case 'alumno':
                    $display = "none";
                    include_once("./views/operacionesAlumnoView.html");
                    break;
    
                case 'modulo':
                    // $display = "none";
                    // include_once("./controllers/moduloController.php");
                    break;
            }            
        }
    ?>

    <form action="#" method="post" style="display: <?php echo $display ?>">
        <select name="tabla" id="tabla">
            <option value="alumno">Tabla alumnos</option>
            <option value="modulo">Tabla modulos</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 10</title>
    <link rel="stylesheet" href="./css/ejercicio10.css">
</head>

<body>

    <!--
        Diseña una aplicación web para capturar a través de un formulario información de un alumno:
        − Ciclo (SMR, ASIR, DAW, DAM). Utiliza un control tipo select.
        − Curso (Primero, Segundo). Utiliza un control tipo radio
        − Otros (Delegado, Menor de edad, Transporte escolar). Utiliza un control tipo checkbox
        El tratamiento será sencillo: si todos los controles no están vacíos, mostrar los datos
         seleccionados a través del método estático visualizar() de la clase DatosAlumno que
         deberás diseñar.
    -->

    <?php

        require_once("./php/ejercicio10-datosAlumnos.php");

        $error = "";

        if (isset($_POST["ciclo"]) && isset($_POST["curso"]) && !empty($_POST["ciclo"]) && !empty($_POST["curso"])) {
            $alumno = new DatosAlumnos($_POST["ciclo"], $_POST["curso"], (isset($_POST["otros"])) ? $_POST["otros"] : []);
        } else {
            $error = "*";
        }

    ?>

    <h1>CIFP JUAN DE COLONIA<br>DATOS ALUMNO</h1>
    <form action="" method="post">
        <table border="1" cellspacing="4" cellpadding="8" align="center">
            <tr>
                <td>
                    <label for="ciclo">Ciclo: </label>
                    <select name="ciclo" id="ciclo">
                        <option value="smr">SMR</option>
                        <option value="asir">ASIR</option>
                        <option value="daw">DAW</option>
                        <option value="dam">DAM</option>
                    </select>
                </td>
                <td>
                    <p>Curso:</p>
                    <input type="radio" name="curso" id="primero" value="Primero">
                    <label for="primero">Primero</label>
                    <input type="radio" name="curso" id="segundo" value="Segundo">
                    <label for="segundo">Segundo</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Otros:</p>
                    <input type="checkbox" name="otros[]" id="delegado" value="Delegado">
                    <label for="delegado">Delegado</label><br>
                    <input type="checkbox" name="otros[]" id="menor" value="Menor de edad">
                    <label for="menor">Menor de edad</label><br>
                    <input type="checkbox" name="otros[]" id="transporte" value="Transporte escolar">
                    <label for="transporte">Transporte escolar</label>
                </td>
            </tr>
            <tr align="center">
                <td id="botones" colspan="2">
                    <button type="reset">Eliminar Datos</button>
                    <button type="submit">Seguir</button><span style="color: red;"><?php echo $error; ?></span>
                </td>
            </tr>
        </table>
    </form>

    <b style="display: <?php echo isset($alumno) ? 'block' : 'none' ?>;"><?php echo $alumno->visualizar(); ?></b>

</body>

</html>
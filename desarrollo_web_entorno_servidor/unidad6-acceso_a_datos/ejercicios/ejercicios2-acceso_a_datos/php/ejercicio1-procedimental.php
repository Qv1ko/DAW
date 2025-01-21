<?php
    // Opción procedimental

    $db_host = "localhost";
    $db_usuario = "root";
    $db_clave = "root";
    $db_nombre = "ciclos";
    $conexion = mysqli_connect($db_host, $db_usuario, $db_clave);

    if (mysqli_connect_errno()) {
        echo "Fallo en la conexión";
    } else {
        echo "La conexión está establecida <br>";
        if (mysqli_select_db($conexion, $db_nombre)) {
            // Consulta 1
            $consulta = "select * from alumno where edad = 18;";
            $resultados = mysqli_query($conexion, $consulta);
            echo "<p>Datos de los alumnos que tengan 18 años:</p>";
            while ($fila = mysqli_fetch_array($resultados)) {
                echo $fila["id_al"] . " | " . $fila["nombre"] . " | " . $fila["edad"] . " | " . $fila["id_curso"] . "<br>";
            }

            // Consulta 2
            $consulta = "select nombre, edad from alumno where edad = 18;";
            $resultados = mysqli_query($conexion, $consulta);
            echo "<p>Nombre y edad de los alumnos que tengan 18 años:</p>";
            while ($fila = mysqli_fetch_array($resultados)) {
                echo $fila["nombre"] . " | " . $fila["edad"] . "<br>";
            }

            // Consulta 3
            $consulta = "select nombre from alumno where edad <> 18;";
            $resultados = mysqli_query($conexion, $consulta);
            echo "<p>Nombre de los alumnos que no tengan 18 años:</p>";
            while ($fila = mysqli_fetch_array($resultados)) {
                echo $fila["nombre"] . "<br>";
            }

            // Consulta 4
            $consulta = "select edad from alumno where nombre = 'Jorge';";
            $resultados = mysqli_query($conexion, $consulta);
            echo "<p>Edad del alumno que se llama Jorge:</p>";
            while ($fila = mysqli_fetch_array($resultados)) {
                echo $fila["edad"] . "<br>";
            }

            // Consulta 5
            $consulta = "select * from alumno where id_al is not null;";
            $resultados = mysqli_query($conexion, $consulta);
            echo "<p>Datos de los alumnos cuyo código de alumno no sea NULL:</p>";
            while ($fila = mysqli_fetch_array($resultados)) {
                echo $fila["id_al"] . " | " . $fila["nombre"] . " | " . $fila["edad"] . " | " . $fila["id_curso"] . "<br>";
            }

            // Consulta 6
            $consulta = "select nombre from alumno where edad = 18 or edad = 21;";
            $resultados = mysqli_query($conexion, $consulta);
            echo "<p>Nombre de los alumnos que tengan o 18 años o 21:</p>";
            while ($fila = mysqli_fetch_array($resultados)) {
                echo $fila["nombre"] . "<br>";
            }

            // Consulta 7
            $consulta = "select nombre from alumno where edad between 18 and 21;";
            $resultados = mysqli_query($conexion, $consulta);
            echo "<p>Nombre de los alumnos que tengan entre 18 y 21 (ambos inclusives):</p>";
            while ($fila = mysqli_fetch_array($resultados)) {
                echo $fila["nombre"] . "<br>";
            }

            mysqli_close($conexion);
        } else {
            echo "No es posible acceder a la base de datos $db_nombre";
        }
    }
?>
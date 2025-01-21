<?php
    // Opción POO

    $conexion = new mysqli("localhost", "root", "root");
    $db_nombre = "ciclos";

    if ($conexion->connect_errno) {
        echo "Fallo en la conexión";
    } else {
        echo "La conexión está establecida <br>";
        if ($conexion->select_db($db_nombre)) {
            // Consulta 1
            $resultados = $conexion->query("select * from alumno where edad = 18;");
            echo "<p>Datos de los alumnos que tengan 18 años:</p>";
            while ($fila = $resultados->fetch_array()) {
                echo $fila["id_al"] . " | " . $fila["nombre"] . " | " . $fila["edad"] . " | " . $fila["id_curso"] . "<br>";
            }

            // Consulta 2
            $resultados = $conexion->query("select nombre, edad from alumno where edad = 18;");
            echo "<p>Nombre y edad de los alumnos que tengan 18 años:</p>";
            while ($fila = $resultados->fetch_array()) {
                echo $fila["nombre"] . " | " . $fila["edad"] . "<br>";
            }

            // Consulta 3
            $resultados = $conexion->query("select nombre from alumno where edad <> 18;");
            echo "<p>Nombre de los alumnos que no tengan 18 años:</p>";
            while ($fila = $resultados->fetch_array()) {
                echo $fila["nombre"] . "<br>";
            }

            // Consulta 4
            $resultados = $conexion->query("select edad from alumno where nombre = 'Jorge';");
            echo "<p><br>Edad del alumno que se llama Jorge:</p>";
            while ($fila = $resultados->fetch_array()) {
                echo $fila["edad"] . "<br>";
            }

            // Consulta 5
            $resultados = $conexion->query("select * from alumno where id_al is not null;");
            echo "<p><br>Datos de los alumnos cuyo código de alumno no sea NULL:</p>";
            while ($fila = $resultados->fetch_array()) {
                echo $fila["id_al"] . " | " . $fila["nombre"] . " | " . $fila["edad"] . " | " . $fila["id_curso"] . "<br>";
            }

            // Consulta 6
            $resultados = $conexion->query("select nombre from alumno where edad = 18 or edad = 21;");
            echo "<p><br>Nombre de los alumnos que tengan o 18 años o 21:</p>";
            while ($fila = $resultados->fetch_array()) {
                echo $fila["nombre"] . "<br>";
            }

            // Consulta 7
            $resultados = $conexion->query("select nombre from alumno where edad between 18 and 21;");
            echo "<p><br>Nombre de los alumnos que tengan entre 18 y 21 (ambos inclusives):</p>";
            while ($fila = $resultados->fetch_array()) {
                echo $fila["nombre"] . "<br>";
            }

            mysqli_close($conexion);
        } else {
            echo "No es posible acceder a la base de datos $db_nombre";
        }
    }
?>
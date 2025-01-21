<?php
    // Opción PDO

    $db_usuario = "root";
    $db_clave = "root";
    $conexion = new PDO("mysql:host=localhost; port=3306; dbname=ciclos", $db_usuario, $db_clave);

    if ($conexion->errorCode()) {
        echo "Fallo en la conexión";
    } else {
        echo "La conexión está establecida <br>";
        // Consulta 1
        $consulta = "select * from alumno where edad = 18;";
        echo "<p>Datos de los alumnos que tengan 18 años:</p>";
        foreach ($conexion->query($consulta) as $fila) {
            echo $fila["id_al"] . " | " . $fila["nombre"] . " | " . $fila["edad"] . " | " . $fila["id_curso"] . "<br>";
        }

        // Consulta 2
        $consulta = "select nombre, edad from alumno where edad = 18;";
        echo "<p>Nombre y edad de los alumnos que tengan 18 años:</p>";
        foreach ($conexion->query($consulta) as $fila) {
            echo $fila["nombre"] . " | " . $fila["edad"] . "<br>";
        }

        // Consulta 3
        $consulta = "select nombre from alumno where edad <> 18;";
        echo "<p>Nombre de los alumnos que no tengan 18 años:</p>";
        foreach ($conexion->query($consulta) as $fila) {
            echo $fila["nombre"] . "<br>";
        }

        // Consulta 4
        $consulta = "select edad from alumno where nombre = 'Jorge';";
        echo "<p>Edad del alumno que se llama Jorge:</p>";
        foreach ($conexion->query($consulta) as $fila) {
            echo $fila["edad"] . "<br>";
        }

        // Consulta 5
        $consulta = "select * from alumno where id_al is not null;";
        echo "<p>Datos de los alumnos cuyo código de alumno no sea NULL:</p>";
        foreach ($conexion->query($consulta) as $fila) {
            echo $fila["id_al"] . " | " . $fila["nombre"] . " | " . $fila["edad"] . " | " . $fila["id_curso"] . "<br>";
        }

        // Consulta 6
        $consulta = "select nombre from alumno where edad = 18 or edad = 21;";
        echo "<p>Nombre de los alumnos que tengan o 18 años o 21:</p>";
        foreach ($conexion->query($consulta) as $fila) {
            echo $fila["nombre"] . "<br>";
        }

        // Consulta 7
        $consulta = "select nombre from alumno where edad between 18 and 21;";
        echo "<p>Nombre de los alumnos que tengan entre 18 y 21 (ambos inclusives):</p>";
        foreach ($conexion->query($consulta) as $fila) {
            echo $fila["nombre"] . "<br>";
        }

        $conexion = null;
    }
?>
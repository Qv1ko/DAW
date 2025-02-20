<?php
    $conexion = new mysqli("localhost", "root", "root");
    $db_nombre = "ciclos";

    if ($conexion->connect_errno) {
        echo "Fallo en la conexión";
    } else {
        if ($conexion->select_db($db_nombre)) {
            // Listado de los alumnos aprobados y sus calificaciones finales
            $resultados = $conexion->query("SELECT a.nombre, a1.media FROM alumno a INNER JOIN (SELECT id_al, AVG(nota) AS media FROM notas GROUP BY id_al) AS a1 ON a.id_al = a1.id_al WHERE a1.media >= 5");
            echo "<p>Listado de los alumnos aprobados y sus calificaciones finales:</p>";
            echo "<table border=2><tr><th>Nombre</th><th>Nota media final</th></tr>";
            while ($fila = $resultados->fetch_array()) {
                echo "<tr><td>" . $fila["nombre"] . "</td><td>" . $fila["media"] . "</td>";
            }
            echo "</table>";

            // Listado con los datos de los alumnos que han aprobado DWES
            $resultados = $conexion->query("SELECT alu.* FROM alumno AS alu INNER JOIN notas USING(id_al) WHERE notas.denominacion = 'DWES' AND notas.nota >= 5");
            echo "<p>Listado con los datos de los alumnos que han aprobado DWES</p>";
            echo "<table border=2><tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Curso</th></tr>";
            while ($fila = $resultados->fetch_array()) {
                echo "<tr><td>" . $fila["id_al"] . "</td><td>" . $fila["nombre"] . "</td><td>" . $fila["edad"] . "</td><td>" . $fila["id_curso"];
            }
            echo "</table>";

            mysqli_close($conexion);
        } else {
            echo "No es posible acceder a la base de datos $db_nombre";
        }
    }
?>
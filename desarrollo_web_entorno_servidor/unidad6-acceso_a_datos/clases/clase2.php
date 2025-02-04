<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 2</title>
</head>

<body>
    <?php
        $alumnos = simplexml_load_file("./data/clase2.xml");
        // $alumnos = new SimpleXMLElement("./data/clase2.xml", 0, true);

        echo "<table border=1>";
        echo "<tr>";
        echo "<th>IDENTIFICADOR</th>";
        echo "<th>NOMBRE</th>";
        echo "<th>EDAD</th>";
        echo "<th>CURSO</th>";
        echo "</tr>";

        foreach ($alumnos as $alumno) {
            echo "<tr>
                <td>" . $alumno->id_al . "</td>
                <td>" . $alumno->nombre . "</td>
                <td>" . $alumno->edad . "</td>
                <td>" . $alumno->codigo . "</td>
            </tr>";
        }

        echo "</table>";
    ?>
</body>

</html>
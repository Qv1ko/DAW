<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del alumno</title>
</head>

<body>
    <?php
        if (is_array($res_consulta)) {
            echo "<table border=1>";
            echo "<tr><th>ID ALUMNO</th><th>NOMBRE</th><th>EDAD</th></tr>";
            foreach ($res_consulta as $al) {
                echo "<tr><td>" . $al['id_al'] . "</td>";
                echo "<td>" . $al['nombre'] . "</td>";
                echo "<td>" . $al['edad'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo $res_consulta;
        }
    ?>
</body>

</html>
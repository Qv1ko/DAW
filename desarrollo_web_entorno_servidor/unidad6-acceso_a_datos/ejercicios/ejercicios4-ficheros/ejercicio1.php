<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>

<body>

    <!--
        Crea un archivo alumnos.txt con los datos de la tabla alumnos de la BBDD ciclos utilizando
         las funciones de la librería Filesystem.
    -->

    <?php
        $con = new mysqli("localhost", "root", "root");
        $db = "ciclos";
        
        $path = "./data/ejercicio1-alumnos.txt";
        $file = fopen($path, "a+");

        if ($con->connect_errno) {
            echo "Fallo en la conexión";
        } else {
            if ($con->select_db($db)) {
                $resultados = $con->query("select * from alumno;");
                while ($fila = $resultados->fetch_array()) {
                    fwrite($file, $fila["id_al"] . ";" . $fila["nombre"] . ";" . $fila["edad"] . ";" . $fila["id_curso"] . "\n");
                }
            }
        }

        fclose($file);
    ?>

</body>

</html>
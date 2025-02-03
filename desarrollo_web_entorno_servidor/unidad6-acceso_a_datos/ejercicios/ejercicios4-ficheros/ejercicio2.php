<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>

<body>

    <!--
        Crear un archivo modulos.txt a partir del array de módulos de las actividades de la
         unidad 2 (en cada línea del fichero la clave del módulo y las horas lectivas). Despué
         recorrerlo y visualizar solo las horas de los módulos.
    -->

    <?php
        $path = "./data/ejercicio2-modulos.txt";
        $file = fopen($path, "a+");

        $modulos = [
            "Desarrollo Web en Entorno Cliente" => 8,
            "Desarrollo Web en Entorno Servidor" => 9,
            "Despliegue de Aplicaciones Web" => 4,
            "Diseño de Interfaces Web" => 6,
            "Empresa e Iniciativa Emprendedora" => 3,
        ];

        foreach ($modulos as $modulo => $horas) {
            fwrite($file, $modulo . ";" . $horas . "\n");
        }

        fclose($file);

        $file = fopen($path, "r");

        while ($data = fgets($file)) {
            echo "<p>" . explode(";", $data)[1] . "</p>";
        }

        fclose($file);
    ?>

</body>

</html>
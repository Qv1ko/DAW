<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 13</title>
</head>

<body>
    <?php

        require_once("./alumno.php");

        // No se hace una invocación del método magico
        $alum = new Alumno("Ana", 20);

        // Ejecuta automáticamente el método __get($atrib)
        echo "Alumno: " . $alum->nom . " " . $alum->edad;

        // Ejecuta automáticamente el método __set($atrib, $valor)
        $alum->nom = "Luis";

        // Mostrar los datos del alumno
        echo "<p>$alum</p>";

        $alum2 = new Alumno;
        $alum2->constructorAlumno2("Jose");

        $alum2->edad = 19;

        echo "<p>$alum2</p>";

        $alum3 = new Alumno;
        $alum3->constructorAlumno3("Antonio", 21);

        echo "<p>$alum3</p>";

    ?>
</body>

</html>
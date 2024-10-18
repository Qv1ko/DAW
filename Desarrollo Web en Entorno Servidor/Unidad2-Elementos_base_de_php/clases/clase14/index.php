<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 14</title>
</head>

<body>
    <?php

        require_once("./alumno.php");

        $alum1 = new Alumno("Luis", 22);
        $alum1->agregarAlumno();
        var_dump($alum1);
        echo "<br>";

        $alum2 = new Alumno("Esther", 55);
        $alum2->agregarAlumno();
        var_dump($alum2);
        echo "<br>";

        $alum3 = new Alumno("Juan", 17);
        $alum3->agregarAlumno();
        var_dump($alum3);

        echo "<p>Ciclo del alumno $alum1->nom: " . $alum1::CICLO . "</p>";
        echo "<p>Ultimo número de matrícula: " . $alum1::$n_matricula . "</p>";

        echo "<p>Importe para la matrícula del alumno $alum1->nom: " . $alum1->importe() . "€</p>";
        echo "<p>Importe para la matrícula del alumno $alum3->nom: " . $alum3->importe() . "€</p>";

        Alumno::printAlumnos();

    ?>
</body>

</html>
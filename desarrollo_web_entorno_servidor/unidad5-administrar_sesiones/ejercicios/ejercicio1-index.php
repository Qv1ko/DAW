<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>

    <!--
        Ejercicio básico cookie de sesión. Análisis de encabezados http.
         - Comprobar el SID desde el navegador (encabezado HTTP set-cookie mensaje "response" y
            encabezado HTTP cookie mensaje "request")
         - Localizar la cookie de sesión creada en el equipo
    -->

    <?php
        session_start();
        $_SESSION['alumno'] = "Victor";
        $_SESSION['aula'] = rand(10, 25);
        // Se a iniciado una sesión y almacenado un dato en una variable superglobal
    ?>

    <a href="./php/ejercicio1-acceso.php">Acceso al aula <?php echo $_SESSION['aula'] ?></a>
</body>

</html>
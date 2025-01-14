<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 7</title>
</head>

<body>

    <!--
        Diseña una aplicación web que te permita saber en todo momento qué pruebas ya has realizado
         en este módulo (llevar un control sobre un test y un examen).
        Cada vez que accedas a la aplicación podrás marcar la actividad (realizada o no).
        Si están todas realizadas, mostrará un mensaje indicándolo. (utiliza dos cookies)
    -->

    <?php

        $title = "<h2>Realiza las actividades</h2>";
        $formHidden = "";

        if (isset($_COOKIE["actividades"])) {
            if (boolval(explode(",", $_COOKIE["actividades"])[0]) && boolval(explode(",", $_COOKIE["actividades"])[1])) {
                $title = "<h2>✅ Realizaste todas las actividades</h2>";
                $formHidden = "hidden";
            }
        }
        
        if (isset($_POST["test"]) || isset($_POST["exam"])) {
            if (isset($_COOKIE["actividades"])) {
                setcookie("actividades", "", time() - 1);
            }
            setcookie("actividades", implode(",", [(isset($_POST["test"]) ? boolval($_POST["test"]) : ""), (isset($_POST["exam"]) ? boolval($_POST["exam"]) : "")]), time() + 20);
            header("Refresh:0");
        }
        
    ?>

    <?php echo $title; ?>
    <form action="#" method="post" <?php echo $formHidden; ?>>
        <input type="checkbox" name="test" id="test"
            <?php echo isset($_COOKIE["actividades"]) ? (boolval(explode(",", $_COOKIE["actividades"])[0]) ? "checked" : "") : ""; ?>>
        <label for="test">Test</label>
        <br>
        <input type="checkbox" name="exam" id="exam"
            <?php echo isset($_COOKIE["actividades"]) ? (boolval(explode(",", $_COOKIE["actividades"])[1]) ? "checked" : "") : ""; ?>>
        <label for="exam">Examen</label>
        <br>
        <br>
        <button type="submit">Guardar cambios</button>
    </form>

</body>

</html>
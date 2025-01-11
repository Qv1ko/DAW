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
        $refresh = false;

        if (isset($_COOKIE["test"]) && isset($_COOKIE["exam"])) {
            if (boolval($_COOKIE["test"]) && boolval($_COOKIE["exam"])) {
                $title = "<h2>✅ Realizaste todas las actividades</h2>";
            }
        } else {
            if (isset($_POST["test"])) {
                if ($_POST["test"] == "on") {
                    setcookie("test", "true", time() + 20);
                }
                $refresh = true;
            } else {
                if (isset($_COOKIE["test"])) {
                    setcookie("test", "true", time() - 1);
                }
            }
            
            if (isset($_POST["exam"])) {
                if ($_POST["exam"] == "on") {
                    setcookie("exam", "true", time() + 20);
                }
                $refresh = true;
            } else {
                if (isset($_COOKIE["exam"])) {
                    setcookie("exam", "true", time() - 1);
                }
            }
            
            if ($refresh) {
                header("Refresh:0");
            }

        }
        
    ?>

    <?php echo $title; ?>
    <form action="#" method="post">
        <input type="checkbox" name="test" id="test"
            <?php echo isset($_COOKIE["test"]) ? (boolval($_COOKIE["test"]) ? "checked" : "") : "" ?>>
        <label for="test">Test</label>
        <br>
        <input type="checkbox" name="exam" id="exam"
            <?php echo isset($_COOKIE["exam"]) ? (boolval($_COOKIE["exam"]) ? "checked" : "") : ""; ?>>
        <label for="exam">Examen</label>
        <br>
        <br>
        <button type="submit">Guardar cambios</button>
    </form>

</body>

</html>
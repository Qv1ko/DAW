<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 6</title>
</head>

<body>

    <!--
        Diseña una pequeña aplicación web con las normas básicas del RRI (Reglamento de Régimen
         Interior del centro). Antes de mostrar las normas, al usuario se le ofrecerá la posibilidad
         de elegir el idioma en el que aparezcan dichas normas.
    -->

    <?php
        if (isset($_COOKIE["language"])) {
            if ($_COOKIE["language"] == "Español" || $_COOKIE["language"] == "Inglés") {
                header("Location: " . "ejercicio6-rri_" . ($_COOKIE["language"] == "Español" ? "es" : "en" ). ".php");
            } else {
                setcookie("language", "", time() - 1);
                header("Refresh:0");
            }
        } else if (isset($_POST["language"])) {
            setcookie("language", $_POST["language"], time() + 30);
            header("Refresh:0");
        }
    ?>

    <form action="#" method="post">
        <label for="language">Seleccione un idioma del RRI:</label>
        <input list="languages" type="text" name="language" id="language">
        <datalist id="languages">
            <option value="Español"></option>
            <option value="Inglés"></option>
        </datalist>
        <button type="submit">Continuar</button>
    </form>

</body>

</html>
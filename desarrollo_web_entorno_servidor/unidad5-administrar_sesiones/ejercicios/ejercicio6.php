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
        if (isset($_COOKIE["lang"])) {
            if ($_COOKIE["lang"] == "spanish" || $_COOKIE["lang"] == "english") {
                header("Location: " . "./html/ejercicio6-rri_" . ($_COOKIE["lang"] == "spanish" ? "es" : "en" ). ".html");
            } else {
                setcookie("lang", "", time() - 1);
                header("Refresh:0");
            }
        } else if (isset($_POST["languages"])) {
            setcookie("lang", $_POST["languages"], time() + 30);
            header("Refresh:0");
        }
    ?>

    <form action="#" method="post">
        <label for="languages">Seleccione un idioma del RRI:</label>
        <select name="languages" id="languages">
            <option value="spanish">Español</option>
            <option value="english">Inglés</option>
        </select>
        <button type="submit">Continuar</button>
    </form>

</body>

</html>
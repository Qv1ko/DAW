<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 17</title>
</head>

<body>
    <?php
        $d = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["enviar"])) {
                $d = $_POST["dato"];
                //exit;
            }
        }
    ?>

    <h3>Practicando con las expresiones regulares y los filtros de PHP</h3>
    <br><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Dato: <input type="text" name="dato" value="<?php echo $d;?>">
        <input type="submit" name="enviar">
    </form>

    <?php
        if (!empty($d)) {
            $patrones = ["/ab/", "/(ab)+/", "/33/", "/[a-z]/i", "/[0-9]{2,3}/", "/ma(s|p)a/i"];
            for ($i=0; $i < count($patrones); $i++) { 
                if (preg_match($patrones[$i], $d)) {
                    echo "<br>$d es correcto. Cumple con el patrón $patrones[$i]<br>";
                } else {
                    echo "<br>$d es incorrecto. No cumple con el patrón $patrones[$i]<br>";
                }
                echo "Practicando con los filtro de PHP:<br><br>";
                echo " " . filter_var($d, FILTER_VALIDATE_EMAIL) . "<br>";
                echo " " . filter_var($d, FILTER_SANITIZE_NUMBER_INT) . "<br>";
                echo " " . filter_var($d, FILTER_VALIDATE_INT) . "<br>";
            }
        }
    ?>
</body>

</html>
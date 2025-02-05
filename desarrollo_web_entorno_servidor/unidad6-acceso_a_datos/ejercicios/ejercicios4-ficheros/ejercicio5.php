<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>

    <!--
        Investiga sobre la clase DOMDocument de PHP y resuelve la actividad anterior con esta tecnología.
    -->

    <?php
        $rss = new DOMDocument();
        $rss->load("./data/ejercicio4-sismologia.xml");

        if ($rss) {
            $items = $rss->getElementsByTagName("item");
            $count = min(10, $items->length);

            echo "<ol>";

            for ($i = 0; $i < $count; $i++) {
                $desc = $items->item($i)->getElementsByTagName("description")->item(0);
                echo "<li>" . $desc->textContent . "</li>";
            }

            echo "</ol>";
        } else {
            return false;
        }
    ?>

</body>

</html>
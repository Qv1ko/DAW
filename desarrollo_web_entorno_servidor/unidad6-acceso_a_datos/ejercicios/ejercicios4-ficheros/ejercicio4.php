<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>

    <!--
        Utiliza la información proporcionada por la RSS y la clase SimpleXMLElement para visualizar
         las 10 primeras descripciones de los sucesos sísmicos del día.
    -->

    <?php
        $rss = new SimpleXMLElement("./data/ejercicio4-sismologia.xml", 0, true);
        
        $items = $rss->channel->item;
        $count = min(10, count($items));

        echo "<ol>";

        for ($i = 0; $i < $count; $i++) {
            echo "<li>" . $items[$i]->description . "</li>";
        }

        echo "</ol>";
    ?>

</body>

</html>
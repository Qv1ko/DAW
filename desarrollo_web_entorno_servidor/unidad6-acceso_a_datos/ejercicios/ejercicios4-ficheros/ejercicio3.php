<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="./css/ejercicio3.css">
</head>

<body>

    <!--
        Analizar el feed RSS e integra la información proporcionada en una pequeña aplicación web.
    -->

    <?php
        $rss = new SimpleXMLElement("./data/ejercicio3-futbol.xml", 0, true);
        $data = [];

        foreach ($rss->channel->item as $item) {
            $card = [];
            
            $card["title"] = $item->title;
            $card["desc"] = $item->description;
            $card["link"] = $item->link;
            $card["creator"] = $item->children('http://purl.org/dc/elements/1.1/')->creator;
            $card["date"] = (string) $item->pubDate;

            array_push($data, $card);
        }

        echo "<h1>El Mundo - Fútbol</h1>";
        echo "<div class='container'>";

        foreach ($data as $card) {
            $title = $card['title'];
            $link = $card['link'];
            $desc = $card['desc'];
            $creator = $card['creator'];

            $dateTime = new DateTime($card['date']);
            $date = $dateTime->format("d/m/Y");

            echo "<div class='card' onclick='window.open(\"$link\", \"_blank\")'>";
            echo "<h2>$title</h2>";
            echo "<p>$desc</p>";
            echo "<p><strong>Creador:</strong> $creator</p>";
            echo "<p><strong>Fecha de publicación:</strong> $date</p>";
            echo "</div>";
        }

        echo "</div>";
    ?>

</body>

</html>
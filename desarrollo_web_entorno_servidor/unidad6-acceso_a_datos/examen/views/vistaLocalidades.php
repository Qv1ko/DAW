<?php
    echo "<p>Localidades donde se dispone de centros de acogida:</p>";
    echo "<ul>";
    foreach ($resultados as $item) {
        echo "<li>" . $item["localidad"] . "</li>";
    }
    echo "</ul>";
?>
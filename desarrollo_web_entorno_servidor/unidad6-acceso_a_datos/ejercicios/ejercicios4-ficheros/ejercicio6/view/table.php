<?php
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Titulo</th>";
    echo "<th>Descripción</th>";
    echo "<th>Enlace</th>";
    echo "</tr>";
    
    foreach ($data as $item) {
        echo "<tr>";
        echo "<td>" . $item->title . "</td>";
        echo "<td>" . $item->desc . "</td>";
        echo "<td><a href='" . $item->link . "' target=\'_blank\'>Acceso</a></td>";
        echo "</tr>";
    }

    echo "</table>";
?>
<?php
    if ($res_consulta) {
        foreach ($res_consulta as $item) {
            echo "<p>Opositor con ID " . $item["cod_op"] . "</p>";
        }
    }
?>

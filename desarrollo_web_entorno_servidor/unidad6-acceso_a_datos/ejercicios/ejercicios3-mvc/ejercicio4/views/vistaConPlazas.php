<?php
    if ($res_consulta) {
        foreach ($res_consulta as $item) {
            echo "<p>Opositor con ID " . $item["cod_op"] . "\n- Notas practico: " . $item["notap"] . "\n- Notas teorico: " . $item["notat"] . "</p>";
        }
    }
?>

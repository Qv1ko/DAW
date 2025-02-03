<?php
    echo "<form action='./controllers/controller.php' method='post'>";
    echo "<label for='consulta'>Elige una consulta:</label>";
    echo "<select name='consulta' id='consulta'>";

    foreach ($consultas as $key => $value) {
        echo "<option value=$key>$value</option>";
    }

    echo "</select>";
    echo "<button>continuar</button>";
    echo "</form>";
?>
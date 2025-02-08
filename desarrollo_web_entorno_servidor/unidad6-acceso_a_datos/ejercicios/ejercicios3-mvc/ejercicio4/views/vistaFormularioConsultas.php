<?php
    echo "<h2>Consultas datos oposiciones</h2>";
    echo "<form action='../controllers/consultasController.php' method='post'>";
    echo "<select name='opcion' id='opcion'>";
    echo "<option value='subsanaciones'>Subsanaciones</option>";
    echo "<option value='con_plaza'>Con plaza</option>";
    echo "<option value='bolsa'>Bolsa trabajo</option>";
    echo "<option value='no_aptos'>No aptos</option>";
    echo "</select><br><br>";
    echo "<button type='submit'>Enviar</button>";
    echo "</form>";
?>

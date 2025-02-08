<?php
    echo "<h2>Oposiciones profesorado</h2>";
    echo "<form action='./controllers/controller.php' method='post'>";
    echo "<select name='opcion' id='opcion'>";
    echo "<option value='consultas'>Subsanaciones y consultas</option>";
    echo "<option value='insertar'>Insertar</option>";
    echo "<option value='borrar'>Borrar</option>";
    echo "</select><br><br>";
    echo "<button type='submit'>Enviar</button>";
    echo "</form>";
?>

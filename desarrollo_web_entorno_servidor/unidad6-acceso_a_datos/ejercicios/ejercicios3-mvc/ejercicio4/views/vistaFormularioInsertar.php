<?php
    echo "<h2>Insertar datos opositor</h2>";
    echo "<form action='../controllers/insertarController.php' method='post'>";
    echo "<label for='codigo'>Código opositor:</label><input type='text' name='codigo' id='codigo'><br><br>";
    echo "<label for='teoria'>Clasificación teoría:</label><input type='text' name='teoria' id='teoria'><br><br>"; 
    echo "<label for='practica'>Clasificacion práctica:</label><input type='text' name='practica' id='practica'>";
    echo "<br><br>";
    echo "<button type='submit'>Enviar</button>";
    echo "</form>";
?>

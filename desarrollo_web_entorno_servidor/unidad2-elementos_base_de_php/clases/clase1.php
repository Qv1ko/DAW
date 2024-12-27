<!DOCTYPE html>
<html lang="en">

<?php
    $num = 5;
?>

<head>
    <title>Clase 2</title>
</head>

<body>

    <b>Hola</b>
    <?php echo '<b>compañeros</b> '?>
    <b>¿Que tal?</b>
    <?php echo '<p>Número: ' . $num .  '</p> '?>

    <?php
        // Ejemplos echo
        $nombre = 'Pedro';
        echo "Hola" , $nombre;
        echo "Hola <br>" , $nombre;
        echo "Hola " , "<b>" , $nombre , "</b>";
        echo "Hola <b>$nombre</b>";
        echo 'Hola <b>$nombre</b>';
    ?>

</body>

</html>
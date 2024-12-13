<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 8</title>
</head>

<body>

    <!--
        Diseña un formulario que capture un número y se visualice la tabla de multiplicar.
        - Sin validación
          - El procesamiento incluido en otro archivo .php
          - El procesamiento incluido en el mismo archivo .php que el formulario.
        - Con validación. El número debe ser positivo y menor o igual que 10.
    -->

    <?php
        if (isset($_POST["respuestaLocal"]) && !empty($_POST["respuestaLocal"])) {
            $number = $_POST["respuestaLocal"];
            $table = "";
        
            for ($i=1; $i < 11; $i++) { 
                $table = $table . "<p>$number x $i = " . $number * $i . "</p>";
            }
        
            echo "<h3>Tabla de multiplicar del $number</h3>";
            echo $table;
            exit();
        }
    ?>

    <form action="ejercicio8-tablaMultiplicar.php" method="POST">
        <input type="text" name="respuestaExterna" placeholder="Escribe un número">
        <input type="submit" value="Enviar respuesta a archivo externo">
    </form>

    <form action="" method="POST">
        <input type="text" name="respuestaLocal" placeholder="Escribe un número">
        <input type="submit" value="Enviar respuesta en local">
    </form>

</body>

</html>
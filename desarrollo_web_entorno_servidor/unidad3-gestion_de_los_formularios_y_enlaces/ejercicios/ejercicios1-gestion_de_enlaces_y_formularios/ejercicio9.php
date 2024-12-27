<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 9</title>
</head>

<body>

    <!--
        Diseña un formulario para capturar dos números menores de 100 y un signo de operación (+,-,x,/) y
         calcula el resultado de la operación. Visualiza el resultado.
         - Sin validación:
           - El procesamiento incluido en otro archivo .php.
           - El procesamiento incluido en el mismo archivo .php que el formulario.
         - Con validación:
           - Diseña funciones para validar los operandos y el operador.
    -->

    <?php
        if (isset($_POST["op1Local"]) && isset($_POST["op2Local"]) && !empty($_POST["op1Local"]) && !empty($_POST["op2Local"])) {
            $op1 = $_POST["op1Local"];
            $op2 = $_POST["op2Local"];
            $ope = $_POST["operationLocal"];
            $result = 0;

            switch ($ope) {
                case 'add':
                    $result = $op1 + $op2;
                    break;
                case '+':
                    $result = $op1 + $op2;
                    break;

                case 'sub':
                    $result = $op1 - $op2;
                    break;
                case '-':
                    $result = $op1 - $op2;
                    break;

                case 'mul':
                    $result = $op1 * $op2;
                    break;
                case '*':
                    $result = $op1 * $op2;
                    break;
        
                case 'div':
                    $result = $op1 / $op2;
                    break;
                case '/':
                    $result = $op1 / $op2;
                    break;
            }

            echo "<p>El resultado de la operación es $result</p>";
            exit();
        }
    ?>

    <form action="./php/ejercicio9-calcular.php" method="post">
        <label for="op1">Primer número:</label>
        <input type="number1" id="op1" name="op1"><br>

        <label for="op2">Segundo número:</label>
        <input type="number1" id="op2" name="op2"><br>

        <label for="operation">Operación:</label>
        <select name="operation" id="operation">
            <option value="add" selected>Suma</option>
            <option value="-">Resta</option>
            <option value="mul">Multiplicación</option>
            <option value="div">División</option>
        </select><br><br>

        <input type="submit" value="Operar">
    </form>

    <br><br>

    <form action="" method="post">
        <label for="op1Local">Primer número:</label>
        <input type="number1" id="op1Local" name="op1Local"><br>

        <label for="op2Local">Segundo número:</label>
        <input type="number1" id="op2Local" name="op2Local"><br>

        <label for="operationLocal">Operación:</label>
        <select name="operationLocal" id="operationLocal">
            <option value="add" selected>Suma</option>
            <option value="sub">Resta</option>
            <option value="mul">Multiplicación</option>
            <option value="div">División</option>
        </select><br><br>

        <input type="submit" value="Operar en local">
    </form>

</body>

</html>
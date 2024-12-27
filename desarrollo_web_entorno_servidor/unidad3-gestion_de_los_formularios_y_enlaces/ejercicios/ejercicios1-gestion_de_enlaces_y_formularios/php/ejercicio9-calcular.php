<?php

    require_once("./ejercicio9-validador.php");

    if (isset($_POST["op1"]) && isset($_POST["op2"]) && !empty($_POST["op1"]) && !empty($_POST["op2"])) {
        $op1 = $_POST["op1"];
        $op2 = $_POST["op2"];
        $ope = $_POST["operation"];
        $result = 0;
        $answer = "Errores:<br>";

        if (validateNumbers(floatval($op1), floatval($op2), $answer) && validateOperation($ope, $answer)) {

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

        } else {
            echo "<p style='color: red'>$answer</p>";
        }
    }

?>
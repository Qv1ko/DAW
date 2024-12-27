<?php
    function validateNumbers(float $num1, float $num2, string &$answer): bool {
        $result = $num1 < 100 && $num2 < 100;
        if (!$result) {
            $answer = $answer . " - Números invalidos, los números deben ser menores de 100.<br>";
        }
        return $result;
    }

    function validateOperation(string $operation, string &$answer): bool {
        $result = preg_match("/\+|-|\*|\//", $operation) || preg_match("/^add$|^sub$|^mul$|^div$/", $operation);
        if (!$result) {
            $answer = $answer . "- Operador invalido, selecciona un operador valido (+, -, *, /)<br>";
        }
        return $result;
    }
?>
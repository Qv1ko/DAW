<?php
    function mostrar(callable $fnc, int $number):void {
        echo $fnc($number);
    }
?>
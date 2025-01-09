<?php
    function validateNumber(float $number): bool {
        return $number >= 0 and $number < 10;
    }
?>
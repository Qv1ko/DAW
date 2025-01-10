<?php
    function borrarCookie(): void {
        setcookie("prueba", "", time() - 1);
        echo "<br>Cookie borrada<br>";
    }
?>
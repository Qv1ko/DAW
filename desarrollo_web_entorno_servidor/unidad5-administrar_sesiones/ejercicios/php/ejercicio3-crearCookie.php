<?php
    function crearCookie(): void {
        setcookie("prueba", "hay una cookie", time() + 60);
        echo "<br>Cookie creada<br>";
    }
?>
<?php

    namespace e6comunicaciones;

    trait Comunicaciones {

        public function saludar() {
            return "Hola a todos";
        }

        public function enviarMensaje($mensaje) {
            echo "<p>$mensaje</p>";
        }

    }
    
?>

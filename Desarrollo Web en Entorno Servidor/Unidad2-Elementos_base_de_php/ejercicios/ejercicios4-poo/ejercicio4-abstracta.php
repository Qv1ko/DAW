<?php

    namespace e4abstracta;

    abstract class Abstracta {

        const CONSTANTE = "Todos";
        static $valor = 1;

        abstract protected function ayudas(): string;
        abstract protected function mensaje(): string;

        static function modificar_static() {
            self::$valor++;
        }

        public function otros() {
            return "Todos sois buena gente";
        }

    }

?>
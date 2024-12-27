<?php

    namespace e4joven;

    require_once("./ejercicio4-abstracta.php");
    
    use e4abstracta as Ab;

    class Joven extends Ab\Abstracta {

        private $dni;
        private $edad;

        function __construct(string $dni, int $edad) {
            $this->dni = $dni;
            $this->edad = $edad;
        }

        public function ayudas(): string {
            if ($this->edad == 18) {
                return "400 euros";
            }
            return "";
        }

        public function mensaje(): string {
            return "Estás en la mejor edad. Disfruta";
        }

    }

?>
<?php

    namespace e4adulto;

    require_once("./ejercicio4-abstracta.php");
    
    use e4abstracta as Ab;

    class Adulto extends Ab\Abstracta {
        
        private $nombre;
        private $profesion;
        private $empresa;

        function __construct(string $nombre, string $profesion, string $empresa) {
            $this->nombre = $nombre;
            $this->profesion = $profesion;
            $this->empresa = $empresa;
        }

        public function ayudas(): string {
            if (strtolower($this->profesion) == "profesor") {
                return "0 euros";
            }
            return "";
        }

        public function mensaje(): string {
            if (strtolower($this->profesion) == "profesor" && strtolower($this->empresa) == "cifp juan de colonia") {
                return "es una buena opción";
            }
            return "";
        }

    }

?>
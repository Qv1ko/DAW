<?php

    namespace e5funccadenas;

    require_once("./ejercicio5-funciones.php");

    use e5funciones as Fu;

    class FuncCadenas extends Fu\Funciones {

        private $cadena;

        function __construct(string $cadena) {
            $this->cadena = $cadena;
        }

        public function macarronico(): string {

            $palabras = explode(" ", preg_replace('/[^A-Za-z0-9áéíóúñ \-]/', '', $this->cadena));
            $resultado = [];

            foreach ($palabras as $palabra) {
                array_push($resultado, (substr($palabra, 1, strlen($palabra)) . substr(strtolower($palabra), 0, 1) . "um"));
            }

            $resultado = ucfirst(implode(" ", $resultado));

            return "<p>El texto \"$this->cadena\" encriptado en macarrónico: $resultado</p>";

        }
        
        public function cesar(): string {
            
            $alfabeto = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
            $caracteres = str_split(strtolower($this->cadena));
            $resultado = "";
            $esLetra = false;

            for ($i = 0; $i < count($caracteres); $i++) {

                $esLetra = false;

                for ($j = 0; $j < count($alfabeto) && !$esLetra; $j++) {
                    if ($caracteres[$i] == $alfabeto[$j]) {
                        $resultado = $resultado . $alfabeto[$j + 3];
                        $esLetra = true;
                    }
                }

                if (!$esLetra) {
                    $resultado = $resultado . $caracteres[$i];
                }

            }

            return "<p>El texto \"$this->cadena\" encriptado por método césar: $resultado</p>";

        }

        public function palindromo(): string {

            $text = str_split(strtolower($this->cadena));

            for ($i = 0; $i < count($text); $i++) {
                if ($text[$i] == " ") {
                    array_splice($text, $i, 1);
                }
            }

            $invert = [];

            for ($i = count($text) - 1; $i >= 0 ; $i--) {
                array_push($invert, $text[$i]);
            }

            $isPalindromo = true;

            for ($i = 0; $i < count($text) && $isPalindromo; $i++) {
                if ($text[$i] != $invert[$i]) {
                    $isPalindromo = false;
                }
            }

            return "<p>El texto \"$this->cadena\" " . ($isPalindromo ? "" : "no") . " es palíndromo</p>";

        }

    }

?>
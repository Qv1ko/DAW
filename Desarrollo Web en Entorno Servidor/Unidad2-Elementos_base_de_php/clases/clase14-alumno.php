<?php

    class Alumno {

        const CICLO = "DAW";
        const TASA_MATRICULA = 2;
        private $nom;
        private $edad;
        static int $n_matricula = 0;
        private string $matricula;
        static $alumnos = [];

        function __construct(string $nombre, int $e) {
            $this->nom = $nombre;
            $this->edad = $e;
            $this->matricula = "M-" . self::incremento();
        }

        function __get(string $atrib): mixed {
            return $this->$atrib;
        }

        function __set(string $atrib, mixed $valor) {
            $this->$atrib = $valor;
        }

        function __toString(): string {
            return "Alumno: " . $this->nom . " " . $this->edad . " del ciclo " . self::CICLO;
        }

        public function importe(): int {
            return $this->esMayor() ? self::TASA_MATRICULA : 0;
        }

        public function esMayor(): bool {
            return $this->edad >= 18;
        }

        public static function incremento(): int {
            return (++self::$n_matricula);
        }

        public function agregarAlumno() {
            array_push(self::$alumnos, $this);
        }
    
        public static function printAlumnos() {
            print_r(self::$alumnos);
        }

    } // fin de clase Alumno

?>
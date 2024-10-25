<?php

    namespace e6segundo;

    require_once("./ejercicio6-alumno.php");
    require_once("./ejercicio6-comunicaciones.php");

    use e6alumno as Al;
    use e6comunicaciones as Co;

    class Segundo extends Al\Alumno { 

        use Co\Comunicaciones;

        private $notaMedia;
        private $fct;
        private $proyecto;

        function __construct(string $nombre, int $edad, float $notaMedia, string $fct, float $proyecto) {
            parent::__construct($nombre, $edad);
            $this->notaMedia = $notaMedia;
            $this->fct = ($fct == "Apto" ? "Apto" : "No apto");
            $this->proyecto = $proyecto;
        }

        public function supera_curso(bool $supera_primero): string {
            return "<p>El alumno $this->nombre" . (($this->notaMedia >= 5 && $this->proyecto >= 5 && $this->fct == "Apto" && $supera_primero) ? " " : " no ") . "ha aprobado el segundo curso</p>";
        }

    }

?>
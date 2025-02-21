<?php

    namespace e3dsegundo;
    
    require_once("./ejercicio3d-alumno.php");
    require_once("./ejercicio3d-aprobado.php");

    use e3dalumno as Al;
    use e3daprobado as Ap;

    class Segundo extends Al\Alumno implements Ap\aprobado {

        private $notaMedia;
        private $fct;
        private $proyecto;

        function __construct(string $nombre, int $edad, float $notaMedia, string $fct, float $proyecto) {
            parent::__construct($nombre, $edad);
            $this->notaMedia = $notaMedia;
            $this->fct = ($fct == "Apto" ? "Apto" : "No apto");
            $this->proyecto = $proyecto;
        }

        public function supera_curso(bool &$supera_primero): string {
            return "<p>El alumno $this->nombre" . (($this->notaMedia >= 5 && $this->proyecto >= 5 && $this->fct == "Apto" && $supera_primero) ? " " : " no ") . "ha aprobado el segundo curso</p>";
        }

    }

?>
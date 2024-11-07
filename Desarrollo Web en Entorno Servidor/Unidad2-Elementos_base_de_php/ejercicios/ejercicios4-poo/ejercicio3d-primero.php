<?php

    namespace e3dprimero;
    
    require_once("./ejercicio3d-alumno.php");
    require_once("./ejercicio3d-aprobado.php");

    use e3dalumno as Al;
    use e3daprobado as Ap;

    class Primero extends Al\Alumno implements Ap\Aprobado {

        private $notaMedia;

        function __construct(string $nombre, int $edad, float $notaMedia) {
            parent::__construct($nombre, $edad);
            $this->notaMedia = $notaMedia;
        }

        public function supera_curso(bool &$resultado): string {
            $resultado = $this->notaMedia >= 5;
            return "<p>El alumno $this->nombre" . ($this->notaMedia >= 5 ? " " : " no ") . "ha aprobado el primer curso</p>";
        }

    }

?>
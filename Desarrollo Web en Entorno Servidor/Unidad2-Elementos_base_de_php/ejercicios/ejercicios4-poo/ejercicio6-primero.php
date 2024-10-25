<?php

    namespace e6primero;

    require_once("./ejercicio6-alumno.php");
    require_once("./ejercicio6-comunicaciones.php");

    use e6alumno as Al;
    use e6comunicaciones as Co;

    class Primero extends Al\Alumno {

        use Co\Comunicaciones;

        private $notaMedia;

        function __construct(string $nombre, int $edad, float $notaMedia) {
            parent::__construct($nombre, $edad);
            $this->notaMedia = $notaMedia;
        }

        public function supera_curso(mixed &$resultado): string {
            $resultado = $this->notaMedia >= 5;
            return "<p>El alumno $this->nombre" . ($this->notaMedia >= 5 ? " " : " no ") . "ha aprobado el primer curso</p>";
        }

    }

?>
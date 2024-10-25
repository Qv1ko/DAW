<?php

    namespace e6empleado;

    require_once("./ejercicio6-comunicaciones.php");

    use e6comunicaciones as Co;

    class Empleado {

        use Co\Comunicaciones;

        private $nss;
        private $empresa;
        private $salario;

        function __construct($nss, $empresa, $salario) {
            $this->nss = $nss;
            $this->empresa = $empresa;
            $this->salario = $salario;
        }

        function retencion(int $porcentaje) {
            return $this->salario / ($porcentaje / 100);
        }

    }

?>
<?php

    class Familia {

        protected $ingresos;
        protected $miembros;

        function __construct(float $ingresos, int $miembros) {
            $this->ingresos = $ingresos;
            $this->miembros = $miembros;
        }

    }

?>
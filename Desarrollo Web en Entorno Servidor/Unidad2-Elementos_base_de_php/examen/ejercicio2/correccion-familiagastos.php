<?php

    class CFamiliaGastos extends Familia {

        public $ano;
        public $mes;
        private const ARRAYGASTOS = [
            "Alimentación" => 150,
            "Higiene personal" => 50,
            "Recibos" => 100,
            "Ocio" => 60
        ];
        private $gastos = [];

        function __construct(float $ingresos, int $miembros, array $tGastos) {
            parent::__construct($ingresos, $miembros);
            $this->ano = date("Y");
            $this->mes = date("m") - 1;
            foreach ($tGastos as $tipo) {
                if(array_key_exists($tipo, self::ARRAYGASTOS)) {
                    array_push($this->gastos, self::ARRAYGASTOS[$tipo] * $this->miembros);
                }
            }
        }

        public function importeTotalGastos(): float {
            $total = 0;
            foreach ($this->gastos as $gasto) {
                $total += $gasto;
            }
            return $total;
        }

        public function ahorroMensual(&$ahorro): void {
            $ahorro = $this->ingresos - $this->importeTotalGastos();
        }

    }

?>
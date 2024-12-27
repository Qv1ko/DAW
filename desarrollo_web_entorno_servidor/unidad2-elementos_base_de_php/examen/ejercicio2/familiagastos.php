<?php

    class FamiliaGastos extends Familia {

        public $ano;
        public $mes;
        private const ARRAYGASTOS = [
            "Alimentación" => 150,
            "Higiene personal" => 50,
            "Recibos" => 100,
            "Ocio" => 60
        ];
        private $gastos;

        function __construct(float $ingresos, int $miembros, array $gastos) {
            parent::__construct($ingresos, $miembros);
            $this->ano = date("Y");
            $this->mes = date("m") - 1;
            $this->gastos = function($gastos) {
                $total = 0;
                // var_dump(self::ARRAYGASTOS["Ocio"]);
                foreach ($gastos as $tipo) {
                    $total = $total + self::ARRAYGASTOS[$tipo];
                }
                return $total;
            };
        }

        public function importeTotalGastos(): float {
            $total = 0;
            foreach ($this->gastos as $gasto => $importe) {
                $total = $total + $importe * $this->miembros;
            }
            return $total;
        }

        public function ahorroMensual(&$ahorro): void {
            $ahorro = $this->ingresos - $this->importeTotalGastos();
        }

    }

?>
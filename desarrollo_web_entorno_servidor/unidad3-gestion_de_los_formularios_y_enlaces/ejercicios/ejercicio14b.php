<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 14 B</title>
</head>

<body>

    <!--
        Adapta a la programación orientada a objetos el ejercicio 9 (con validación y si validación)
    -->

    <?php
        if (isset($_POST["num1"]) && isset($_POST["num2"]) && !empty($_POST["num1"]) && !empty($_POST["num2"])) {
            // Con validación
            $calc = new Operacion(floatval($_POST["num1"]), floatval($_POST["num2"]), $_POST["operacion"], true);
            echo "<p>El resultado de la operación con validación es " . $calc->calcular() . "</p>";

            // Sin validación
            $calc = new Operacion(floatval($_POST["num1"]), floatval($_POST["num2"]), $_POST["operacion"], false);
            echo "<p>El resultado de la operación sin validación es " . $calc->calcular() . "</p>";

            exit();
        }

        class Operacion {
            public $num1;
            public $num2;
            public $ope;

            public function __construct(float $num1, float $num2, string $ope, bool $validar) {
                $this->num1 = $validar ? $this->valNumber($num1) : $num1;
                $this->num2 = $validar ? $this->valNumber($num2) : $num2;
                $this->ope = $ope;
            }

            public function calcular(): float {
                $result = 0;
        
                switch ($this->ope) {
                    case 'add':
                        $result = $this->num1 + $this->num2;
                        break;
                    case 'sub':
                        $result = $this->num1 - $this->num2;
                        break;
                    case 'mul':
                        $result = $this->num1 * $this->num2;
                        break;
                    case 'div':
                        $result = $this->num1 / $this->num2;
                        break;
                }
            
                return $result;
            }

            private function valNumber(float $num1): float {
                return is_numeric($num1) && $num1 < 100 ? $num1 : 0;
            }

        }

    ?>

    <h3>Calculadora</h3>
    <form action="" method="post">
        <input type="number1" id="num1" name="num1">
        <select name="operacion" id="operacion">
            <option value="add" selected>Suma</option>
            <option value="sub">Resta</option>
            <option value="mul">Multiplicación</option>
            <option value="div">División</option>
        </select>
        <input type="number1" id="num2" name="num2">
        <span>=</span>
        <input type="submit" value="Operar">
    </form>

</body>

</html>
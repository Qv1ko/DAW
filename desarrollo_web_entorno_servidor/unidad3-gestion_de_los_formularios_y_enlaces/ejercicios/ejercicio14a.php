<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 14 A</title>
</head>

<body>

    <!--
        Adapta a la programación orientada a objetos el ejercicio 8 (con validación y si validación)
    -->

    <?php

        if (isset($_POST["respuresta"]) && !empty($_POST["respuresta"])) {
            $numero = new Numero(intval($_POST["respuresta"]));
        
            // Con validación
            echo Numero::imprimirTabla($numero->numero);
            // Sin validación
            echo Numero::imprimirTabla($numero->numero, true);

            exit();
        }

        class Numero {
            public $numero;

            public function __construct(int $numero) {
                $this->numero = $numero;
            }

            public static function imprimirTabla(int $numero, bool $noValidar = false): string {
                $tabla = "";

                if (($numero >= 0 and $numero < 10) or $noValidar) {
                    $tabla = "<h3>Tabla de multiplicar " . " del $numero</h3>";
                    for ($i=1; $i < 11; $i++) { 
                        $tabla = $tabla . "<p>$numero x $i = " . $numero * $i . "</p>";
                    }
                } else {
                    $tabla = "<h3 style='color: red;'>Número invalido, escribe un número positivo menor que 10</h3>";
                }

                return $tabla;
            }
        }

    ?>

    <form action="#" method="POST">
        <input type="text" name="respuresta" placeholder="Escribe un número">
        <input type="submit" value="Enviar respuesta">
    </form>

</body>

</html>
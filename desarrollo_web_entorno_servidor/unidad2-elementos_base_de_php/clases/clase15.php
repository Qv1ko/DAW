<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clase 15</title>
</head>

<body>
    <?php

        abstract class Abstracta {
            protected $nombre;
            protected $edad;
            abstract function competencia_digital($atrib);
            abstract function calculo_trienios($atrib2);
            function __construct($nom, $edad) {
                $this->nombre = $nom;
                $this->edad = $edad;
            }
        }

        // Las funciones abstractas se tienen que definir obligatoriamente en las clases hijas

        class Alumno extends Abstracta {
            function competencia_digital($curso) {
                if ($curso == 2) {
                    return "alta<br>";
                } else {
                    return "baja<br>";
                }
            }
            function calculo_trienios($anos_tabajados) {
                return "No corresponde este calculo al alumno";
            }
        }

        class Profesor extends Abstracta {
            function competencia_digital($especialidad) {
                if ($especialidad == "informática") {
                    return "alta<br>";
                } else {
                    return "En proceso de mejora<br>";
                }
            }
            function calculo_trienios($anos_tabajados) {
                return (int)($anos_tabajados / 3);
            }
        }

    ?>
</body>

</html>
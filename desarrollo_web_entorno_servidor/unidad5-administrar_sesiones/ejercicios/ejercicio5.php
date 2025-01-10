<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 5</title>
</head>

<body>

    <!--
        Diseña una aplicación que ofrezca a través de una tabla tres enlaces a los tres ciclos de
         grado superior. Si eres de asir, se creará una cookie donde el parámetro enviado para su
         creación será asir, si eres de dam, el parámetro será dam y si eres de daw, el parámetro
         será daw. La próxima vez que accedas a la aplicación, ya no te pedirá que elijas el ciclo,
         sino que ya irás directamente a ver los módulos de 2º del ciclo en el cuál estás matriculado.
         Crea una cookie para conseguirlo.
    -->

    <?php
        if (isset($_GET["ciclo"]) && !empty($_GET["ciclo"])) {
            setcookie("ciclo", $_GET["ciclo"], time() + 30);
            header("Refresh:0; url=" . $_SERVER['PHP_SELF']);
        }

        if (isset($_COOKIE['ciclo'])) {

            $confTable = "hidden";
            $modulos = [];
            $isCorrect = true;

            switch ($_COOKIE['ciclo']) {
                case 'asir':
                    $modulos = ["Implantación de Sistemas Operativos", "Planificación y Administración de Redes", "Fundamentos de Hardware", "Gestión de Bases de Datos", "Lenguajes de Marcas y Sistemas de Gestión de Información", "Administración de Sistemas Operativos", "Servicios de Red e Internet", "Implantación de Aplicaciones Web", "Administración de Sistemas Gestores de Bases de Datos", "Seguridad y Alta Disponibilidad"];
                    break;
                case 'dam':
                    $modulos = ["Sistemas Informáticos", "Bases de Datos", "Programación", "Lenguajes de Marcas y Sistemas de Gestión de Información", "Entornos de Desarrollo", "Acceso a Datos", "Desarrollo de Interfaces", "Programación Multimedia y Dispositivos Móviles", "Programación de Servicios y Procesos", "Sistemas de Gestión Empresarial"];
                    break;
                case 'daw':
                    $modulos = ["Sistemas Informáticos", "Bases de Datos", "Programación", "Lenguajes de Marcas y Sistemas de Gestión de Información", "Entornos de Desarrollo", "Desarrollo Web en Entorno Cliente", "Desarrollo Web en entorno Servidor", "Despliegue de Aplicaciones Web", "Diseño de Interfaces Web"];
                    break;
                default:
                    $isCorrect = false;
                    break;
            }

            if ($isCorrect) {
                $modulos = array_merge($modulos, ["Inglés Profesional", "Itinerario Personal para la Empleabilidad I", "Itinerario Personal para la Empleabilidad II", "Digitalización Aplicada a los Sectores Productivos", "Sostenibilidad Aplicada al Sistema Productivo"]);
                echo "<h1>Modulos del Grado Superior de " . strtoupper($_COOKIE['ciclo']) . "</h1>";
                echo "<ul>";
                foreach ($modulos as $modulo) {
                    echo "<li>" . $modulo . "</li>";
                }
                echo "</ul>";
            } else {
                $confTable = "";
            }

        } else {
            $confTable = "";
        }
    ?>
    <table cellpadding="4" align="center" <?php echo $confTable; ?>>
        <tr>
            <td colspan="2" align="center">
                <p>CICLOS DE GRADO SUPERIOR<br>INFORMÁTICA Y COMUNICACIONES</p>
            </td>
        </tr>
        <tr>
            <td rowspan="1" style="background-color:rgb(243, 168, 243);">
                <p>ASIR</p>
            </td>
            <td rowspan="1" style="background-color:rgb(243, 168, 243);">
                <a href="?ciclo=asir">Acceso a ASIR</a>
            </td>
        </tr>
        <tr>
            <td rowspan="1" style="background-color:rgb(243, 168, 243);">
                <p>DAM</p>
            </td>
            <td rowspan="1" style="background-color:rgb(243, 168, 243);">
                <a href="?ciclo=dam">Acceso a DAM</a>
            </td>
        </tr>
        <tr>
            <td rowspan="1" style="background-color:rgb(243, 168, 243);">
                <p>DAW</p>
            </td>
            <td rowspan="1" style="background-color:rgb(243, 168, 243);">
                <a href="?ciclo=daw">Acceso a DAW</a>
            </td>
        </tr>

    </table>
</body>

</html>
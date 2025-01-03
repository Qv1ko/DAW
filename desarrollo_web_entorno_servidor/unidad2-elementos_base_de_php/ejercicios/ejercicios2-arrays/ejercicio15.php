<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 15</title>
</head>

<body>
    <?php

        /*
         * Es preciso almacenar las plataformas web vistas en la unidad y recoger de cada una de
         *  ellas sus componentes.
         * Con un mensaje indica en cuales de ellas el servidor web es Apache.
         */
        
        $plataformas = [
            "WampServer" => [
                "Sistema operativo" => "Windows", "Servidor web" => "Apache", "Gestor de bases de datos" => "MySQL", "Tecnología de desarrollo" => "PHP"
            ],
            "Xampp" => [
                "Sistema operativo" => ["Windows", "Linux", "iOS"], "Servidor web" => "Apache", "Gestor de bases de datos" => "MySQL", "Tecnología de desarrollo" => "PHP"
            ],
            "Wisa" => [
                "Sistema operativo" => "Windows", "Servidor web" => "IIS", "Gestor de bases de datos" => "SQL Server", "Tecnología de desarrollo" => "ASP.NET"
            ],
            "New" => [
                "Sistema operativo" => "Linux", "Servidor web" => "Nginx", "Gestor de bases de datos" => "MariaDB", "Tecnología de desarrollo" => "PHP"
            ]
        ];

        echo "<p>Plataformas web que usan Apache</p>";
        // foreach ($plataformas as $plataforma => $componentes) {
        //     foreach ($componentes as $componente => $nombre) {
        //         if ($componente == "Servidor web" && $nombre == "Apache") {
        //             echo "<p>- $plataforma</p>";
        //             goto next;
        //         }
        //     }
        //     next:
        // }

        foreach ($plataformas as $plataforma => $componentes) {
            foreach ($componentes as $componente => $nombre) {
                if (is_array($nombre)) {
                    if (in_array("Apache", $nombre)) {
                        echo "<p>- $plataforma</p>";
                        goto next;
                    }
                } else {
                    if ($componente == "Servidor web" && $nombre == "Apache") {
                        echo "<p>- $plataforma</p>";
                        goto next;
                    }
                }
            }
            next:
        }

    ?>
</body>

</html>
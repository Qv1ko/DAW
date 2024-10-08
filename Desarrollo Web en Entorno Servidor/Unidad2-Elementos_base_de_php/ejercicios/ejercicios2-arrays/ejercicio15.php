<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>

<body>
    <?php
        
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
        foreach ($plataformas as $plataforma => $componentes) {
            foreach ($componentes as $componente => $nombre) {
                if ($componente == "Servidor web" && $nombre == "Apache") {
                    echo "<p>- $plataforma</p>";
                    goto next;
                }
            }
            next:
        }

    ?>
</body>

</html>
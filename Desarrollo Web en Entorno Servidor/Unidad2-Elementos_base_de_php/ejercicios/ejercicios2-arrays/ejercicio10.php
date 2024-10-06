<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>
    <?php
        
        $alumnosIC = [
            "Informática y Comunicaciones" => [
                "Sofía Vazquez" => 17,
                "Joan Medina" => 18,
                "Adrian Martinez" => 18,
                "María Rosario Gonzalez" => 19,
                "Marcos Moya" => 18,
                "Rocío Diaz" => 17,
                "Eva María Sanchez" => 16,
                "Esther Torres" => 18,
                "Emilio Cano" => 19,
                "Albert Ibañez" => 16,
                "Carlos Marin" => 16,
                "Montserrat Reyes" => 19,
                "Tomas Flores" => 18,
                "Felipe Peña" => 17,
                "Rosario Vicente" => 16,
                "Cristian Soto" => 18,
                "Juan jose Mora" => 18,
                "Luis Iglesias" => 19,
                "Albert Guerrero" => 19,
                "Josefa Marquez" => 16
            ],
            "Sistemas Microinformáticos y Redes" => [
                "Alfonso Carrasco" => 22,
                "Mercedes Vargas" => 20,
                "Salvador Mendez" => 20,
                "Ramon Marin" => 19,
                "Noelia Cabrera" => 19,
                "Ángela Gomez" => 17,
                "Marcos Gonzalez" => 21,
                "Mohamed Blanco" => 19,
                "María Carmen Alvarez" => 17,
                "Rodrigo Garrido" => 21,
                "Rafael Lorenzo" => 22,
                "Hugo Peña" => 18,
                "Alberto Vidal" => 19,
                "María Rosario Diez" => 18,
                "Rodrigo Romero" => 22,
                "Jose Antonio Gutierrez" => 16,
                "Lidia Roman" => 32,
                "Alex Morales" => 24,
                "Susana Alonso" => 20,
                "Lucas Castillo" => 19,
                "María Cristina Alonso" => 25,
                "Lorena Suarez" => 28,
                "Jesus Lorenzo" => 26,
                "Ismael Nuñez" => 25,
                "Joan Lopez" => 21,
                "Jaime Ruiz" => 16,
                "Catalina Montero" => 26,
                "Manuel Lorenzo" => 30,
                "Catalina Ramos" => 27,
                "Lidia Gonzalez" => 18,
                "David Gallardo" => 21,
                "Juan Antonio Marquez" => 19,
                "Jose Miguel Castillo" => 21,
                "Ana Belén Ortega" => 22,
                "Montserrat Cano" => 16,
                "Alejandro Crespo" => 20,
                "Lidia Medina" => 21,
                "Irene Fernandez" => 22,
                "Jose Antonio Caballero" => 19,
                "Juan jose Vargas" => 18,
                "Andrea Alonso" => 21,
                "Marta Nieto" => 19,
                "Daniel Gonzalez" => 21,
                "Andres Mora" => 20,
                "Ainhoa Lopez" => 21,
                "Ana Belén Ferrer" => 17,
                "Mariano Ramirez" => 22,
                "Ignacio Montero" => 19,
                "Oscar Diez" => 17,
                "María Nieves Sanz" => 22,
                "María Mercedes Cortes" => 20,
                "Esperanza Romero" => 18,
                "Xavier Martin" => 19,
                "Esther Caballero" => 17,
                "Alejandro Lozano" => 18,
                "David Jimenez" => 18,
                "Jorge Esteban" => 19,
                "Noelia Garcia" => 16,
                "Verónica Pascual" => 16,
                "Manuela Soto" => 18
            ],
            "Administración de Sistemas Informáticos en Red" => [
                "Vicente Delgado" => 18,
                "Cristina Cabrera" => 20,
                "María Soledad Sanchez" => 21,
                "Albert Molina" => 18,
                "Emilia Velasco" => 21,
                "Martin Caballero" => 18,
                "María Carmen Suarez" => 18,
                "Isabel Carrasco" => 18,
                "María Soledad Herrero" => 18,
                "Alba Molina" => 21,
                "Eva Muñoz" => 19,
                "Juan Manuel Gallego" => 21,
                "Amparo Fernandez" => 19,
                "María Rosa Gil" => 18,
                "Olga Calvo" => 19,
                "Miriam Ramirez" => 31,
                "Raul Fuentes" => 31,
                "María Josefa Martinez" => 25,
                "María Luisa Medina" => 35,
                "Manuela Soler" => 32,
                "María Mercedes Cortes" => 22,
                "Esperanza Romero" => 19,
                "Xavier Martin" => 20,
                "Esther Caballero" => 24,
                "Alejandro Lozano" => 19,
                "David Jimenez" => 23,
                "Jorge Esteban" => 21,
                "Noelia Garcia" => 24,
                "Verónica Pascual" => 23,
                "Manuela Soto" => 23,
                "Vicente Delgado" => 23,
                "Cristina Cabrera" => 19,
                "María Soledad Sanchez" => 18,
                "Albert Molina" => 19,
                "Emilia Velasco" => 18,
                "Martin Caballero" => 19,
                "María Carmen Suarez" => 19,
                "Isabel Carrasco" => 32,
                "María Soledad Herrero" => 31,
                "Alba Molina" => 21,
            ],
            "Desarrollo de Aplicaciones Web" => [
                "Eva Muñoz" => 21,
                "Juan Manuel Gallego" => 25,
                "Amparo Fernandez" => 24,
                "María Rosa Gil" => 22,
                "Olga Calvo" => 19,
                "Miriam Ramirez" => 21,
                "Raul Fuentes" => 19,
                "María Josefa Martinez" => 19,
                "María Luisa Medina" => 25,
                "Manuela Soler" => 21,
                "María Mercedes Cortes" => 18,
                "Esperanza Romero" => 18,
                "Xavier Martin" => 21,
                "Esther Caballero" => 22,
                "Alejandro Lozano" => 23,
                "David Jimenez" => 30,
                "Jorge Esteban" => 26,
                "Noelia Garcia" => 35,
                "Verónica Pascual" => 34,
                "Manuela Soto" => 28,
            ],
            "Desarrollo de Aplicaciones Multiplataforma" => [
                "Vicente Delgado" => 24,
                "Cristina Cabrera" => 18,
                "María Soledad Sanchez" => 20,
                "Albert Molina" => 23,
                "Emilia Velasco" => 22,
                "Martin Caballero" => 22,
                "María Carmen Suarez" => 18,
                "Isabel Carrasco" => 20,
                "María Soledad Herrero" => 19,
                "Alba Molina" => 23,
                "Eva Muñoz" => 24,
                "Juan Manuel Gallego" => 22,
                "Amparo Fernandez" => 20,
                "María Rosa Gil" => 20,
                "Olga Calvo" => 24,
                "Miriam Ramirez" => 31,
                "Raul Fuentes" => 19,
                "María Josefa Martinez" => 23,
                "María Luisa Medina" => 32,
                "Manuela Soler" => 28,
            ]
        ];

        $menores = 0;
        $jovenes = 0;
        $adultos = 0;
        $soloJovenes = true;

        foreach ($alumnosIC as $ciclo => $alumnos) {
            echo "<p>Ciclo Formativo de $ciclo</p>";
            $menores = 0;
            $jovenes = 0;
            $adultos = 0;
            $soloJovenes = true;
            foreach ($alumnos as $alumno => $edad) {
                if ($edad < 18) {
                    $menores++;
                    $soloJovenes = false;
                } elseif ($edad >= 18 && $edad <= 22) {
                    $jovenes++;
                } elseif ($edad > 22) {
                    $adultos++;
                    $soloJovenes = false;
                }
            }
            echo "<p>- $menores " . ($menores == 1 ? "menor" : "menores") . " de edad</p>";
            echo "<p>- $jovenes " . ($jovenes == 1 ? "alumno" : "alumnos") . " entre los 18 y 22 años</p>";
            echo "<p>- $adultos " . ($adultos == 1 ? "alumno" : "alumnos") . " mayores de 22 años</p>";
            if ($soloJovenes) {
                echo "<p>Solo hay alumnos entre los 18 y 22 años</p>";
            }
        }

    ?>
</body>

</html>
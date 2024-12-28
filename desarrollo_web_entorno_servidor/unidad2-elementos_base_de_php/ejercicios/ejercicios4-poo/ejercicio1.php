<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 1</title>
</head>

<body>
    <?php

        /*
         * Utiliza las siguientes funciones predefinidas de PHP en un script desde el que puedas
         *  utilizar una clase:
         *  - get_class()  
         *  - class_exists()  
         *  - get_declared_classes()  
         *  - get_class_vars()  
         *  - get_class_methods()
         *  - get_object_vars()
         *  - property_exists()
         *  - get_parent_class()
         *  - is_subclass_of()
         *  - instanceof()
         *  - serialize()
         *  - unserialize()
         */

        require_once("./php/ejercicio1-alumno.php");

        $ejemplo = new Alumno("Jose", 21);

        echo "<p>get_class(\$ejemplo) --> " . get_class($ejemplo) . "</p>";
        echo "<p>class_exists('Alumno') --> " . (class_exists("Alumno") ? "true" : "false") . "</p>";
        echo "<p>get_declared_classes() --> ";
        print_r(get_declared_classes());
        echo "</p>";
        echo "<p>get_class_vars('Alumno') --> ";
        echo print_r(get_class_vars("Alumno"));
        echo "</p>";

        echo "<p>get_class_methods('Alumno') --> ";
        print_r(get_class_methods("Alumno"));
        echo "</p>";
        echo "<p>get_object_vars(\$ejemplo) --> ";
        print_r(get_object_vars($ejemplo));
        echo "</p>";
        echo "<p>property_exists('Alumno', 'matricula') --> " . (property_exists("Alumno", "edad") ? "true" : "false") . "</p>";
        echo "<p>get_parent_class(\$ejemplo) --> " . get_parent_class($ejemplo) . "</p>";

        echo "<p>is_subclass_of(\$ejemplo, 'Alumno') --> " . (is_subclass_of($ejemplo, "Alumno") ? "true" : "false") . "</p>";
        echo "<p>\$ejemplo instanceof Alumno --> " . ($ejemplo instanceof Alumno ? "true" : "false") . "</p>";
        echo "<p>serialize(\$ejemplo::CICLO) --> " . serialize($ejemplo->edad) . "</p>";
        $sc = serialize($ejemplo->edad);
        echo "<p>unserialize(\$sc) --> " . unserialize($sc) . "</p>";

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio 8 B</title>
</head>

<body>

    <!--
        Resolver el ejercicio 8 para que además de almacenar en el objeto del usuario su nombre y
         contraseña, se almacene información sobre el momento en el que el usuario intenta acceder
         a la aplicación; es decir, cada vez que el usuario con credenciales correctas acceda a la
         aplicación se visualice su nombre y la fecha y la hora (hh:mm:ss) de los accesos.
    -->

    <?php
        require_once("./php/ejercicio8-usuario.php");
        date_default_timezone_set("Europe/Madrid");

        const USER = "YWRtaW4=";
        const PASS = "bWp1YW4=";

        $title = "Inicio de sesión";
        $message = "";
        $formDisplay = "";

        if (isset($_COOKIE["user"])) {
            $user = unserialize(explode("|", $_COOKIE["user"])[0]);
            $logs = explode(";", explode("|", $_COOKIE["user"])[1]);

            // Guardado de la nueva fecha en la que ha iniciado sesión
            $newDatetime = new DateTime();
            array_push($logs, $newDatetime->format("d/m/Y h:i:s"));

            // Definición del titulo y los mensajes a mostrar
            $title = "<p>Usuario " . $user->name . "</p>";
            $message = "<p>Ya ha iniciado sesión con éxito en otro momento:</p>";
            $formDisplay = "hidden";

            // foreach del array donde se guardan las fechas
            foreach ($logs as $datetime) {
                $message = $message . "<p>- $datetime</p>";
            }

            // Sobreescritura de la cookie con la nueva fecha
            setcookie("user", implode("|", [serialize($user), implode(";", $logs)]), time() + 180);
        } elseif (isset($_POST["user"]) and isset($_POST["pass"])) {
            // Creación del nuevo objeto usuario
            $user = new Usuario(htmlspecialchars($_POST["user"]), htmlspecialchars($_POST["pass"]));

            if (base64_encode($user->name) == USER && base64_encode($user->password) == PASS) {
                // Primera fecha
                $datetime = new DateTime();

                // Crea la cookie serializando el objeto de usuario y guardando la primera fecha
                setcookie("user", implode("|", [serialize($user), implode(";", array($datetime->format("d/m/Y h:i:s")))]), time() + 180);

                $formDisplay = "hidden";
                $title = "Bienvenido " . $user->name;
            } else {
                $title = "Acceso denegado";
            }
        }
    ?>

    <h2><?php echo $title; ?></h2>
    <?php echo $message; ?>
    <form action="#" method="post" <?php echo $formDisplay; ?>>
        <label for="user">Usuario:</label>
        <input type="text" name="user" id="user">

        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass">

        <br><br>

        <button type="submit">Iniciar sesión</button>
    </form>

</body>

</html>
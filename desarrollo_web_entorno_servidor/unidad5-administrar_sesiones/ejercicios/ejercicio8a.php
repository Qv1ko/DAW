<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 8 A</title>
</head>

<body>

    <!--
        Serialización de los datos. Diseña la clase Usuario cuyos atributos serán nombre y contraseña
         y cuyos métodos únicamente su constructor y recuperador de atributos (__construct y __get,
         métodos mágicos). Diseña un pequeño formulario para un login y almaceda los datos en el
         objeto. Si el usuario es "admin" y la contraseña "mjuan" mostrar el mensaje de "Bienvenido"
         y la próxima vez que acceda a la aplicación mostrar el mensaje "Usuario correcto [nombre_usuario].
         Usted ya se logeó exitósamente en otro momento". Si el usuario no es el indicado, mostrar
         el mensaje "Acceso denegado". 
    -->

    <?php
        require_once("./php/ejercicio8-usuario.php");

        const USER = "YWRtaW4=";
        const PASS = "bWp1YW4=";
        $formDisplay = "";
        $infoText = "Login";

        if (isset($_COOKIE["user"])) {
            $formDisplay = "hidden";
            $infoText = "Usuario correcto " . base64_decode(explode(",", $_COOKIE["user"])[0]) . ". Usted ya se logeó exitósamente en otro momento";
        } elseif (isset($_POST["user"]) and isset($_POST["pass"])) {
            $user = new Usuario(htmlspecialchars($_POST["user"]), htmlspecialchars($_POST["pass"]));
            if (base64_encode($user->name) == USER && base64_encode($user->password) == PASS) {
                setcookie("user", implode(",", [base64_encode($user->name), base64_encode($user->password)]), time() + 180);
                $formDisplay = "hidden";
                $infoText = "Bienvenido";
            } else {
                $infoText = "Acceso denegado";
            }
        }
    ?>

    <h2><?php echo $infoText; ?></h2>
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
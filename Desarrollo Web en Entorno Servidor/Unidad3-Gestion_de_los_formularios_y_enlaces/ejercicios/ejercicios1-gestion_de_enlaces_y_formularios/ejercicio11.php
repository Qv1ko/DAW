<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="./css/ejercicio11.css" />
</head>

<body>

    <!--
        Escribe el login (nombre de usuario y contraseña). Si es admin y mjuan, el login es
         correcto. En ese caso, muestra un mensaje de bienvenida. En caso contrario, un mensaje de error.
        - Sin validación
          - El procesamiento incluido en otro archivo .php (atributo action de la etiqueta <from>).
          - El procesamiento incluido en el mismo archivo .php que el formulario.
        - Con validación.
    -->

    <?php

        const USER = "GU+ScGQ=";
        const PASS = "FUGKeGQ=";
        const KEY = "Ejercicio 11";
        const IV = "ejercicio11-dwes";

        $loged = "";

        if (isset($_POST["user"]) && isset($_POST["password"])) {
            if (openssl_encrypt($_POST["user"], "aes-256-ctr", KEY, 0, IV) === USER && openssl_encrypt($_POST["password"], "aes-256-ctr", KEY, 0, IV) === PASS) {
                echo '<div class="success"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span><strong>¡BIENVENIDO!</strong> Iniciaste sesión correctamente.</div>';
                $loged = "disabled";
            } else {
                echo '<div class="danger"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span><strong>¡ERROR!</strong> El usuario no existe o la contraseña es incorrecta.</div>';
            }
        }

    ?>

    <section>
        <div class="signin">
            <div class="content">
                <h2>Iniciar sesión</h2>
                <form action="" method="POST" class="form">
                    <!-- <form action="./ejercicio11-login.php" method="POST" class="form"> -->
                    <div class="inputBox">
                        <input type="text" name="user" require /> <i>Usuario</i>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="password" require />
                        <i>Contraseña</i>
                    </div>

                    <div class="inputBox">
                        <input type="submit" value="Entrar" <?php echo $loged ?> />
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
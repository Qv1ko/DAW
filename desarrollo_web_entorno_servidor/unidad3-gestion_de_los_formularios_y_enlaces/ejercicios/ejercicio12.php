<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Ejercicio 12</title>
    <link rel="stylesheet" href="./css/ejercicio11.css" />
</head>

<body>

    <!--
        Utilizando la aplicación web del ejercicio 11, modifica las páginas diseñadas de tal forma
         que los datos del formulario sean tratados como un array.
    -->

    <?php

        const USER = "Tzqk3vM=";
        const PASS = "QzS81vM=";
        const KEY = "Ejercicio 12";
        const IV = "ejercicio12-dwes";

        $loged = "";

        if (isset($_POST["user"]) && isset($_POST["password"])) {
            $data = [
                "user" => $_POST["user"],
                "pass" => $_POST["password"]
            ];
    
            if (openssl_encrypt($data["user"], "aes-256-ctr", KEY, 0, IV) === USER && openssl_encrypt($data["pass"], "aes-256-ctr", KEY, 0, IV) === PASS) {
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
                    <!-- <form action="./php/ejercicio12-login.php" method="POST" class="form"> -->
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
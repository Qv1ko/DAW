<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
    <link rel="stylesheet" href="./css/ejercicio11.css">
</head>

<body>

    <!--
        Adapta la aplicación web del ejercicio 11 para que una vez validado el usuario, en otro
         formulario, se elija el rol del usuario, el recurso al que accede y las operaciones:
    -->

    <?php
        $admin = new User("admin", "mjuan");

        if (isset($_POST["user"]) && isset($_POST["password"])) {
            $try = new User($_POST["user"], $_POST["password"]);

            if ($try->name === $admin->name && $try->pass === $admin->pass) {
                echo '<div class="success"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span><strong>¡BIENVENIDO!</strong> Iniciaste sesión correctamente.</div>';
                header("Location: ./html/ejercicio16-login.html");
            } else {
                echo '<div class="danger"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span><strong>¡ERROR!</strong> El usuario no existe o la contraseña es incorrecta.</div>';
            }
        }

        class User {
            const KEY = "Ejercicio 16";
            const IV = "ejercicio16-dwes";
            public $name;
            public $pass;

            public function __construct($name, $pass) {
                $this->name = openssl_encrypt($name, "aes-256-ctr", self::KEY, 0, self::IV);
                $this->pass = openssl_encrypt($pass, "aes-256-ctr", self::KEY, 0, self::IV);
            }
        }
    ?>

    <section>
        <div class="signin">
            <div class="content">
                <h2>Iniciar sesión</h2>
                <form action="#" method="POST" class="form">
                    <div class="inputBox">
                        <input type="text" name="user" require /> <i>Usuario</i>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="password" require />
                        <i>Contraseña</i>
                    </div>

                    <div class="inputBox">
                        <input type="submit" value="Entrar" />
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
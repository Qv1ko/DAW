<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 - Formulario</title>
    <link rel="stylesheet" href="./css/ejercicio16-form.css">
</head>

<body>

    <?php
        if (isset($_POST["rol"]) && isset($_POST["access"]) && isset($_POST["permissions"])) {
            echo "<div class='form-group'>";
            echo "<h4>Los datos del usuario son:</h4>";
            echo "<p>- Usuario: " . $_POST['rol'] . "</p>";
            echo "<p>- Acceso: " . $_POST['access'] . "</p>";
            echo "<p>- Permisos: \"";
            echo "<span>" . (in_array("permiso_lectura", $_POST["permissions"]) ? "r" : "-") . "</span>";
            echo "<span>" . (in_array("permiso_escritura", $_POST["permissions"]) ? "w" : "-") . "</span>";
            echo "<span>" . (in_array("permiso_ejecucion", $_POST["permissions"]) ? "x" : "-") . "</span>";
            echo "\"</p>";
            echo "</div>";
            exit();
        }
    ?>

    <div class="form-container">
        <h1>TRATAMIENTO DEL USUARIO</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label>Rol y permisos:</label>
                <label><input type="radio" name="rol" value="administrador"> Administrador</label>
                <label><input type="radio" name="rol" value="usuario"> Usuario</label>
            </div>
            <div class="form-group">
                <label for="access">Acceso:</label>
                <select id="access" name="access">
                    <option value="Gestión Datos">Gestión Datos</option>
                    <option value="Gestión Informes">Gestión Informes</option>
                    <option value="Gestión Permisos y Reconocimientos">Gestión Permisos y Reconocimientos</option>
                    <option value="Gestión Sanciones">Gestión Sanciones</option>
                </select>
            </div>
            <div class="form-group">
                <label>Permisos:</label>
                <div class="permissions">
                    <label><input type="checkbox" name="permissions[]" value="permiso_lectura"> Lectura</label>
                    <label><input type="checkbox" name="permissions[]" value="permiso_escritura"> Escritura</label>
                    <label><input type="checkbox" name="permissions[]" value="permiso_ejecucion"> Ejecución</label>
                </div>
            </div>
            <div class="buttons">
                <button type="reset" class="delete">Eliminar datos</button>
                <button type="submit" class="continue">Seguir</button>
            </div>
        </form>
    </div>
</body>

</html>
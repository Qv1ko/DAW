<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clase 2</title>
</head>

<body>
    <form action="./php/clase2-datos.php" method="post">
        Usuario: <input type="text" name="usuario[nombre]" id="" />
        Password: <input type="password" name="usuario[clave]" id="" />
        <br><br>
        Turno: <input type="radio" name="turno" value="D" />Diurno
        <input type="radio" name="turno" value="V" />Vespertino
        <br><br>
        <input type="submit" name="enviar" value="OK" />
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 4</title>
</head>

<body>

    <!--
        Plantea el ejercicio 1 con un formulario que utilice un control tipo select.
    -->

    <h2>Aplicación</h2>
    <form action="./ejercicio4-enlazador.php" method="post">
        <input type="text" name="texto" placeholder="Texto">
        <br><br>
        <select name="opcion">
            <option value="ejercicio4-palindromo.php" selected>Palíndromo</option>
            <option value="ejercicio4-macarronico.php">Macarrónico</option>
            <option value="ejercicio4-encriptacion_cesar.php">Encriptación César</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
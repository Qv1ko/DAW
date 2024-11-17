<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 3</title>
</head>

<body>

    <!--
        Plantea el ejercicio 1 con un formulario que utilice un control tipo radio.
    -->

    <h2>Aplicación</h2>
    <form action="./ejercicio3-enlazador.php" method="post">
        <input type="text" name="texto" placeholder="Texto">
        <br><br>
        <input type="radio" name="opcion" value="ejercicio3-palindromo.php" checked />Palíndromo
        <input type="radio" name="opcion" value="ejercicio3-macarronico.php" checked />Macarrónico
        <input type="radio" name="opcion" value="ejercicio3-encriptacion_cesar.php" checked />Encriptación César
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
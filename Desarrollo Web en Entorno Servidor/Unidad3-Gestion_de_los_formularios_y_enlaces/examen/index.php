<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación</title>
</head>

<body>
    <h1>Vivir sin leer es peligroso te oblia a creer en lo que te digan</h1>
    <form action="" method="post">
        <table border="2" cellspacing="4" cellpadding="8" align="center">
            <tr>
                <td rowspan="2">
                    <label for="titulo">Seleccione un título: </label>
                    <select name="titulo" id="titulo">
                        <option value="atrapados">Atrapados</option>
                        <option value="dune">Dune</option>
                        <option value="viajando">Viajando</option>
                        <option value="vivir">Vivir</option>
                        <option value="contigo">Contigo</option>
                        <option value="inferno">Inferno</option>
                        <option value="flandes">Flandes</option>
                        <option value="da_vinci">Da_Vinci</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Curso:</p>
                    <input type="radio" name="curso" id="primero" value="Primero">
                    <label for="primero">Primero</label>
                    <input type="radio" name="curso" id="segundo" value="Segundo">
                    <label for="segundo">Segundo</label>
                    <p>Otros:</p>
                    <input type="checkbox" name="otros[]" id="delegado" value="Delegado">
                    <label for="delegado">Delegado</label><br>
                    <input type="checkbox" name="otros[]" id="menor" value="Menor de edad">
                    <label for="menor">Menor de edad</label><br>
                    <input type="checkbox" name="otros[]" id="transporte" value="Transporte escolar">
                    <label for="transporte">Transporte escolar</label>
                    <br>
                    <button type="reset">Borrar</button>
                    <button type="submit">Seguir</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
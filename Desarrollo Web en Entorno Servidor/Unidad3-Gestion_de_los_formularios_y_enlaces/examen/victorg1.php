<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación</title>
</head>

<body>

    <!--
        Diseña una aplicación web para que a partir de un formulario se muestre un mensaje indicando
         el precio de un libro una vez aplicados determinados descuentos. Para ello será necesario
         diseñar un formulario para insertar el título del libro, su precio habitual y la aplicación
         de ciertos descuentos (cliente premium y vale 10% descuento aplicable a los libros de aventuras).
        La estructura de archivos de la aplicación será la siguiente:
        - idalumno1
          - idalumno1.php
          - clase_idalumno1.php
          - f_idalumno1.php
        - idalumno1.php, será el "index" o comienzo de la aplicación web. El formulario que diseñes formará parte de su código (ej: estherg1.php)
        - clase_idalumno1.php, incluirá la definición de la clase Libro. (ej: clase_estherg1.php)
        - f_idalumno1.php, tendrá la definición de las funciones solicitadas. (ej: f_estherg1.php)
          - opcional: puedes utilizar un archivo datos_aux.php si necesitas almacenar en él variables auxiliares.
        Funciones solicitadas:
        − Función para construir el array que recoge información sobre los títulos de los libros disponibles y sus géneros. Para ello utilizarás la siguiente información:
          - Ficción:
            - Atrapados
            - Dune
          - Aventuras:
            - Viajando
            - Vivir
            - Contigo
          - Misterio:
            - Inferno
            - Flandes
            - Da_Vinci
        Esta función deberás utilizarla para construir de forma dinámica el control <select> asociado al título del libro recogido en el formulario.
        − Función para validar el precio del libro; será un valor no vacío, real y positivo. Deberás visualizar mensajes de error en caso de:
          - Estar vacío
          - No ser un valor real
          - No ser un valor positivo
        − Función para obtener el género del titulo del libro solicitado en el formulario. (este género deberás utilizarlo para calcular el precio real del libro).
        Definición de la clase Libro:
        − Atributos:
          - Título del libro solicitado
          - Precio capturado en el formulario
        − Métodos:
          - Método para calcular el precio del libro una vez aplicados los descuentos. Para ello:
            - Si el libro no tiene descuentos, el precio será el mismo que el capturado en el formulario.
            - Si se trata de un cliente premium, se aplica un 10% de descuento
            - Si se dispone de un vale descuento del 10% para libros de aventuras, se aplicará dicho descuento siempre y cuando el libro sea de aventuras.
            - Los descuentos son acumulables.
          - Otros métodos que tú consideres necesarios
    -->

    <h1>Vivir sin leer es peligroso te oblia a creer en lo que te digan</h1>
    <form action="" method="post">
        <table cellpadding="8" align="center">
            <tr>
                <td rowspan="4" style="background-color: #808080;">
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
                    <label for="precio">Precio:</label>
                    <input type="text" name="precio" id="precio"><span style="color: red;">* obligatorio</span>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Descuento <span style="font-style: italic;">(oferta acumulable)</span>:</p>
                    <input type="checkbox" name="descuento[]" id="premium" value="cliente_premium">
                    <label for="premium">Cliente premium</label><br>
                    <input type="checkbox" name="descuento[]" id="vale10aventuras" value="vale10aventuras">
                    <label for="vale10aventuras">Vale 10% en libros de aventuras</label><br>
                </td>
            </tr>
            <tr>
                <td align="center" style="background-color: #808080;">
                    <br>
                    <button type="reset">Borrar</button>
                    <button type="submit">Seguir</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ejercicio 15</title>
        <link rel="stylesheet" href="./css/ejercicio15.css" />
    </head>
    <body>
        
        <!--
            Gestionar de forma sencilla una inmobiliaria. La idea base es que las viviendas disponibles
            a la venta tienen un precio final que depende de sus características: superficie habitable,
            orientación principal (sur o norte), número de habitaciones y número de baños. Todas las
            viviendas tienes un precio base que será 50000 euros. Cuando un cliente solicita precio de
            una vivienda, indicará cuáles son sus preferencias y a partir de ellas, la inmobiliaria
            calculará el precio final. El ayuntamiento aporta una ayuda a fondo perdido, de 3000 euros
            si solo tiene un dormitorio.
        -->

        <?php

            $calculo = "";

            if (isset($_POST['superficie']) && isset($_POST['orientacion']) && isset($_POST['banos']) && isset($_POST['habitaciones'])) {
                $precio = 50000;
                $ayuda = 0;

                if ($_POST['superficie'] == '<50') {
                    $precio += 10000;
                } elseif ($_POST['superficie'] == '50-80') {
                    $precio += 20000;
                } elseif ($_POST['superficie'] == '80-100') {
                    $precio += 30000;
                } elseif ($_POST['superficie'] == '>100') {
                    $precio += 40000;
                }

                if ($_POST['orientacion'] == 'norte') {
                    $precio += 5000;
                } elseif ($_POST['orientacion'] == 'sur') {
                    $precio += 10000;
                }

                if ($_POST['banos'] == '2') {
                    $precio += 5000;
                } elseif ($_POST['banos'] == '3') {
                    $precio += 10000;
                } elseif ($_POST['banos'] == '4') {
                    $precio += 15000;
                }

                if ($_POST['habitaciones'] == '2') {
                    $precio += 10000;
                } elseif ($_POST['habitaciones'] == '3') {
                    $precio += 15000;
                } elseif ($_POST['habitaciones'] == '4') {
                    $precio += 20000;
                }

                if ($_POST['habitaciones'] == '1') {
                    $ayuda = 3000;
                }

                $precio -= $ayuda;

                $calculo = "El precio de un piso con las características seleccionadas es de $precio euros.";
            } else {
                $calculo = "Por favor, rellene todos los campos del formulario.";
            }

        ?>

        <h1>INMOBILIARIA EL CHOLLO</h1>
        <form action="#" method="post">
            <div class="form-row">
                <fieldset>
                    <legend>Superficie (m²):</legend>
                    <label
                        ><input type="radio" name="superficie" value="<50" />
                        &lt;50 m²</label
                    ><br />
                    <label
                        ><input type="radio" name="superficie" value="50-80" />
                        entre 50 m² y 80 m²</label
                    ><br />
                    <label
                        ><input type="radio" name="superficie" value="80-100" />
                        entre 80 m² y 100 m²</label
                    ><br />
                    <label
                        ><input type="radio" name="superficie" value=">100" />
                        &gt;100 m²</label
                    >
                </fieldset>
                <fieldset>
                    <legend>Orientación:</legend>
                    <label
                        ><input type="radio" name="orientacion" value="norte" />
                        Norte</label
                    ><br />
                    <label
                        ><input type="radio" name="orientacion" value="sur" />
                        Sur</label
                    >
                </fieldset>
            </div>

            <div class="form-row">
                <div class="select-container">
                    <label for="banos"
                        >Nº baños:
                        <select id="banos" name="banos">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></label
                    >
                </div>
                <div class="select-container">
                    <label for="habitaciones"
                        >Nº habitaciones:
                        <select id="habitaciones" name="habitaciones">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></label
                    >
                </div>
            </div>

            <button type="submit">Enviar</button>
        </form>

        <p><?php echo $calculo; ?></p>

    </body>
</html>

console.log("--- Ejercicio 25 ---");

/*
 * Crear el código para crear un formulario a partir de los datos
 *  indicados en la cadena DATOS_FORMULARIO. Se crearán el label y el
 *  input dentro de un <p>.
 * El label tendrá el atributo for con el mismo contenido del atributo id del input.
 * El input tendrá los atributos id, name y required.
 */

const DATOS_FORMULARIO =
    '{"campos": [{"label": "Código ciclo","id": "codCiclo","name": "codCiclo","obligatorio": true}, {"label": "Descripción ciclo","id": "desCiclo","name": "desCiclo","obligatorio": true},{"label": "Observaciones","id": "observaciones","name": "observaciones","obligatorio": false}]}';

crearFormulario(DATOS_FORMULARIO);

function crearFormulario(datosJson) {
    datos = JSON.parse(datosJson);
    form = document.getElementById("formulario");

    form.style.border = "1px solid blue";
    form.style.padding = "8px";
    form.style.paddingTop = "4px";

    for (let elementos of Object.values(datos)) {
        for (let elemento of elementos) {
            p = document.createElement("p");
            label = document.createElement("label");
            input = document.createElement("input");

            for (let [propiedad, valor] of Object.entries(elemento)) {
                switch (propiedad) {
                    case "label":
                        label.textContent = valor;
                        break;

                    case "id":
                        label.setAttribute("for", valor);
                        input.setAttribute(propiedad, valor);
                        break;

                    case "name":
                        input.setAttribute(propiedad, valor);
                        break;

                    case "obligatorio":
                        if (valor) {
                            input.required = true;
                        }
                        break;
                    default:
                        break;
                }
            }

            p.append(label, input);
            form.append(p);
        }
    }
    form.append(document.getElementById("validar"));
}

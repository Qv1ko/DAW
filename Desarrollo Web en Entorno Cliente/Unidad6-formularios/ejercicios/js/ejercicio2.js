console.log("--- Ejercicio 2 ---");

/*
 * Cuando se lanza el evento "submit", se deben mostrar por consola todos los valores asignados a
 *  variables del formulario, y el formulario no se debe enviar al servidor.
 */

document.addEventListener("submit", validarFormulario);

function validarFormulario(submit) {
    let form = document.forms["miFormulario"];

    //nombre
    console.log("Nombre: " + form.elements["nombre"].value);

    //teléfono
    console.log("Telefono: " + form.elements["telefono"].value);

    // Fecha nacimiento
    console.log(
        "Fecha nacimiento: " +
            form.elements["dia"].value +
            "/" +
            form.elements["mes"].value +
            "/" +
            form.elements["ano"].value
    );

    //socio
    console.log("Socio: " + form.elements["socio"].value);

    //curso seleccionado
    console.log("Curso: " + form.elements["curso"].value);

    // cursos realizados
    console.log(
        "Cursos realizados: " +
            Array.from(form.elements["cursosRealizados"].options)
                .filter((option) => option.selected)
                .map((option) => option.value)
                .join(", ")
    );

    console.log(
        "Cursos realizados: " +
            Array.from(
                document.querySelectorAll("#cursosRealizados option:checked")
            )
                .map((curso) => curso.value)
                .join(", ")
    );

    // descuento
    console.log("Descuento: " + form.elements["descuento"].value);

    //observaciones
    console.log("Observaciones: " + form.elements["observaciones"].value);

    submit.preventDefault();
}

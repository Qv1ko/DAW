console.log("--- Ejercicio 15 ---");

/*
 * Escribir una interfaz para crear una lista de lo que ingresa un usuario.
 * Para cada item de la lista:
 * - Preguntar al usuario acerca del contenido usando prompt.
 * - Crear el <li> con ello y agregarlo a <ul>.
 * - Continuar hasta que el usuario cancela el ingreso (presionando Esc o con un ingreso vacío).
 * Todos los elementos deben ser creados dinámicamente.
 * Si el usuario ingresa etiquetas HTML, deben ser tratadas como texto.
 */

let ul = document.createElement("ul");
document.body.append(ul);

while (true) {
    input = prompt("Añade contenido");
    if (input == null) {
        break;
    }
    let li = document.createElement("li");
    li.textContent = input;
    ul.append(li);
}

console.log("--- Ejercicio 1 ---");

/*
 * Realiza el script con lo que se indica:
 * Cuando cambie el valor de la opción seleccionada
 * - Muestra por consola el valor y el texto del option seleccionado
 * Cuando haga clic en el botón añadir género
 * - Añade un nuevo option con el texto del input nuevo y el value será el texto en minúsculas
 * - Seleccionalo en el select
 */

document.addEventListener("change", changeEvent);

function changeEvent(e) {
    option = e.target.closest("select");
    if (option) {
        console.log(e.target.value);
        console.log(e.target.options[e.target.selectedIndex].text);
    }
}

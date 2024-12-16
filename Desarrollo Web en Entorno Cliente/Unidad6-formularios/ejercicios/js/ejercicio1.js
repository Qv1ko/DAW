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
document.addEventListener("click", addGen);

function changeEvent(e) {
    let option = e.target.closest("select");
    if (option) {
        console.log(e.target.value);
        console.log(e.target.options[e.target.selectedIndex].text);
    }
}

function addGen(e) {
    let optionsSelect = document.getElementById("genres");
    let txt = document.getElementById("nuevo");
    let btn = document.getElementById("annadir");

    if (e.target == btn) {
        let newOption = document.createElement("option");
        newOption.setAttribute("value", txt.value.toLowerCase());
        newOption.textContent = txt.value;

        txt.value = "";
        optionsSelect.append(newOption);
    }
}

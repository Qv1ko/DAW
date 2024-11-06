console.log("--- Ejercicio 22 ---");

/*
 * Escribir una función showNotification(options) que cree una
 * notificación: <div class="notification"> con el contenido dado. La
 * notificación debería desaparecer automáticamente despues de 1.5 segundos.
 */

showNotification({
    top: 10,
    right: 10,
    html: "Hello!",
    className: "welcome",
});

let proceso = setTimeout(() => {
    document.getElementsByClassName("welcome")[0].style.display = "none";
}, 1500);

function showNotification(options) {
    document.body.innerHTML +=
        "<div class=" +
        options.className +
        " style='background-color: green; position: absolute; top: " +
        options.top +
        "px; right: " +
        options.right +
        "px'><p>" +
        options.html +
        "</p></div>";
}

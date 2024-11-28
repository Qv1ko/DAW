console.log("--- Ejercicio 15 ---");

/*
 * A partir de la página web proporcionada, añade código JavaScript
 *  para que:
 * - Cuando se haga clic un enlace, se oculte su sección relacionada
 *    y cambie el texto del enlace a "Mostrar contenidos"
 * - Cuando se vuelva a hacer clic sobre el mismo enlace, se muestre
 *    otra vez esa sección de contenidos y cambie el texto del enlace
 *    a "Ocultar contenidos"
 */

const LINKS = document.body.querySelectorAll("div a");

// LINKS.forEach((link) => {
//     link.addEventListener("click", (e) => {
//         const CONTENT = e.target.parentElement.querySelectorAll("p");
//         CONTENT.forEach((p) => {
//             p.hidden = !p.hidden;
//             link.textContent = p.hidden
//                 ? "Mostrar contenidos"
//                 : "Ocultar contenidos";
//         });
//     });
// });

// Delegación de eventos
document.addEventListener("click", (e) => {
    if (e.target.tagName == "A") {
        const CONTENT = e.target.parentElement.querySelectorAll("p");
        CONTENT.forEach((p) => {
            p.hidden = !p.hidden;
            e.target.textContent = p.hidden
                ? "Mostrar contenidos"
                : "Ocultar contenidos";
        });
    }
});

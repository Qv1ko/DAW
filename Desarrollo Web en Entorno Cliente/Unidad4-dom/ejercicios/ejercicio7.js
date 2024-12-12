console.log("--- Ejercicio 7 ---");

/*
 * Escribe el código para que algunos enlaces externos tengan como
 *  color del texto el naranja si:
 * - Su href tiene ://
 * - Pero no comienza con http://internal.com.
 */

for (let link of document.querySelectorAll("a")) {
    if (
        link.getAttribute("href") &&
        link.getAttribute("href").includes("://") &&
        !link.getAttribute("href").includes("http://internal.com")
    ) {
        link.style.color = "orange";
    }
}

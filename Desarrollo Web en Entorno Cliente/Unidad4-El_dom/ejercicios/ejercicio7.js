console.log("--- Ejercicio 7 ---");

/*
 * Escribe el código para que algunos enlaces externos tengan como color del texto el naranja si:
 * - Su href tiene ://
 * - Pero no comienza con http://internal.com.
 */

for (let a of document.getElementsByTagName("a")) {
    if (
        a.getAttributeNode("href").includes("://") &&
        !a.getAttributeNode("href").includes("http://internal.com")
    ) {
        a.style.color = "orange";
    }
}

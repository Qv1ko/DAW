console.log("--- Ejercicio 2 ---");

/*
 * Si elem es un elemento nodo arbitrario del DOM...
 */

// ¿Es cierto que elem.lastChild.nextSibling siempre es null?
console.log(document.body.lastChild.nextSibling); // Siempre es null porque despues del ultimo hijo del elemento no hay ningun otro nodo

// ¿Es cierto que elem.children[0].previousSibling siempre es null?
console.log(document.body.children[0].previousSibling); // No es null porque recoge un nodo superior aunque sea de otro elemento padre

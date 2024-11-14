console.log("-- Clase 5 --");

titulo = document.getElementById("h2Clase5");

console.log("Estilos del titulo H2: " + titulo.style.cssText);

console.log("Estilo de la fuente: " + getComputedStyle(titulo).fontStyle);

console.log("Clases del titulo: " + titulo.className);
console.log("ID del titulo: " + titulo.id);

console.log("Lista de clases: " + titulo.classList);
console.log(titulo.classList);

titulo.classList.remove("cursiva"); // Elimina una clase
titulo.classList.add("cursiva"); // Añade una clase

titulo.classList.toggle("cursiva"); // Si no esta la clase la añade y si esta la elimina

console.log(titulo.classList.contains("cursiva")); // Comprueba si el elemento contiene la clase

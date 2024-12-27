console.log("-- Clase 4 --");

let lista = new Map(); // Crear lista

lista.set("clave", "valor"); // Añade un valor

v = lista.get("clave");

console.log(v);

console.log(lista.has("clave")); // Comprueba si la lista contiene un elemento

console.log(lista.size); // Tamaño de la lista

lista.delete("clave"); // Borra una clave-valor

lista.clear(); // Borra todos los elementos de la lista

lista.set("A", "Manzana").set("B", "Naranja").set("C", "Platano");

for (let [clave, valor] of lista) {
    console.log("Fruta " + clave + ": " + valor);
}

let verduras = new Set();

verduras
    .add("Lechuga")
    .add("Pepinillo")
    .add("Tomate")
    .add("Cebolla")
    .add("Ajo")
    .add("Tomate");

console.log(verduras.has("Ajo")); // Comprueba si el conjunto contiene un elemento

verduras.delete("Pepinillo"); // Borra un valor

// verduras.clear() // Borra todos los elementos del conjunto

for (let verdura of verduras) {
    console.log(verdura);
}

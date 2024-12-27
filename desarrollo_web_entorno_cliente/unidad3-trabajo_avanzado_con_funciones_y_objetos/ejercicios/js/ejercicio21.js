console.log("--- Ejercicio 21 ---");

/*
 * Muestra en consola el doble de todos los valores de la cadena JSON.
 */

let cadenaJSON = "[1, 2, 3, 2, 4, 6, 1]";

arr = JSON.parse(cadenaJSON).map((number) => number * 2);

console.log(arr);

fetch("ejercicio21.json")
    .then((response) => {
        if (!response.ok) {
            throw new Error("La respuesta no es correcta");
        }
        return response.json();
    })
    .then((data) => {
        let pokemons = data;
        pokemons.pokemon.forEach((pokemon) => {
            console.log(`ID: ${pokemon.id}`);
            console.log(`Nombre: ${pokemon.name}`);
            console.log(`Tipo: ${pokemon.type.join(", ")}`);
            console.log(`Debilidades: ${pokemon.weaknesses.join(", ")}`);
            console.log(
                `Evoluciones: ${
                    pokemon.next_evolution
                        ? pokemon.next_evolution.map((e) => e.nombre).join(", ")
                        : "Ninguna"
                }`
            );
            console.log("-------------------");
        });
    })
    .catch((error) => {
        console.error(
            "Hubo un problema con la operación de obtención: ",
            error
        );
    });

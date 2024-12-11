console.log("--- Ejercicio 23 ---");

// 1. Al hacer clic sobre el título h3, el texto del h3 tiene que cambiar por "Adiós".
const title3 = document.getElementById("titulo");
title3.setAttribute("onclick", "this.textContent = 'Adiós';");

// 2. Haz lo mismo que en el ejercicio anterior, pero utilizando addEventListener.
title3.addEventListener(
    "click",
    (evento = (e) => (e.currentTarget.textContent = "Adiós"))
);

// 3. Partiendo del ejercicio anterior, ¿cómo desenlazarías el manejador de eventos, para que al
//     hacer clic ya no ocurra nada?
title3.removeEventListener("click", evento);

// 4. En alguno de los tres modelos de eventos que hemos visto, ¿se pueden asignar varios manejadores
//     a un evento?
// Con addEventListener, escribiendo varias veces el mismo evento con diferentes acciones.

// 5.¿Podríamos utilizar el siguiente código para cambiar el color del texto cuando el usuario
//    hace clic? Escríbelo de forma correcta en caso negativo.
// <h3 id="titulo" onclick="this.style.color='red'">Hola</h3>
// Si, el código es correcto.

// 6. ¿Podríamos utilizar el siguiente código para llamar a la función miFuncion cuando el usuario
//     hace clic? Escríbelo de forma correcta en caso negativo.
// <h3 id="titulo" onclick="miFuncion">Hola</h3>
// Si, el código es correcto.

// 7. Al hacer clic sobre el enlace, se preguntará al usuario si estás seguro de que quieres ir a Google.
//     En caso afirmativo, se irá a esa página, y en caso negativo, no se irá.
// Cómo se haría utilizando el modelo de eventos en línea.
// <a href="http://www.google.es" onclick="if (!confirm('¿Estás seguro de que quieres ir a Google?')) {return false;};">Google</a>

// 8. Repite la cuestión anterior utilizando addEventListener.
document.getElementsByTagName("a")[0].addEventListener("click", (e) => {
    if (!confirm("¿Estás seguro de que quieres ir a Google?")) {
        e.preventDefault();
    }
});

// 9. Si e es un objeto de tipo Event (evento), ¿qué propiedades tienen la siguiente información?
// Elemento en el que se disparó el evento: e.target
// Elemento que es objetivo del evento e.currentTarget
// Nombre del evento que se está gestionando (ej. click): e.type

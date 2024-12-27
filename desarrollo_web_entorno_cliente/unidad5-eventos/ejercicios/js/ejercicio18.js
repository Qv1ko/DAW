console.log("--- Ejercicio 18 ---");

/*
 * Crear un script que informe al usuario en qué zona de la pantalla ha hecho clic el ratón.
 * Las zonas posibles son las siguientes: izquierda arriba, izquierda abajo, derecha arriba y
 *  derecha abajo, todas relativas al tamaño de la ventana del navegador.
 * Para obtener el WIDTH Y HEIGHT de la ventana podemos utilizar document.documentElement.clientWidth
 *  y  document.documentElement.clientHeight.
 */

let zona = document.getElementsByClassName("posicion")[0];

document.addEventListener("click", (e) => {
    const WIDTH = document.documentElement.clientWidth;
    const HEIGHT = document.documentElement.clientHeight;
    const X = e.clientX;
    const Y = e.clientY;

    zona.textContent =
        X < WIDTH / 2 && Y < HEIGHT / 2
            ? "izquierda arriba"
            : X < WIDTH / 2 && Y >= HEIGHT / 2
            ? "izquierda abajo"
            : X >= WIDTH / 2 && Y < HEIGHT / 2
            ? "derecha arriba"
            : "derecha abajo";
});

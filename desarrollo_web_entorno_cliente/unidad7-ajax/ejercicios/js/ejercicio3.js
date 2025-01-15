console.log("--- Ejercicio 3 ---");

/*
 * La página debe hacer:
 * - Cuando el usuario introduzca el nombre de una localidad y pulse intro obtendrá, en el input,
 *    un mensaje que indicará si la ciudad está incluida dentro de una lista de ciudades o no. El
 *    mensaje será rojo si no está incluida y verde en caso afirmativo.
 * - El archivo .php comprueba que la localidad recibida por parámetro está o no incluida dentro de
 *    una lista de 10 localidades (ignora la diferencia entre mayúsculas y minúsculas). Devuelve "S"
 *    si está incluida y "N" si no está incluida.
 */

document.addEventListener("keydown", (e) => {
    let input = document.getElementById("localidad");
    let result = document.getElementById("resultado");

    if (e.key === "Enter" && input.value !== "") {
        let xhr = new XMLHttpRequest();
        let url = new URL("./php/ejercicio3.php");
        url.addParameter("localidad", input.value);

        xhr.open("GET", url.print());
        xhr.addEventListener("load", () => {
            if (!(xhr.status != 200)) {
                let response = xhr.responseText === "S" ? true : false;
                result.textContent = response
                    ? "La ciudad esta incluida dentro de la lista"
                    : "La ciudad no esta incluida dentro de la lista";
                result.style.color = response ? "green" : "red";
            }
        });

        xhr.send();
    }
});

class URL {
    path;
    params = [];

    constructor(path) {
        this.path = encodeURI(path);
    }

    addParameter(key, value) {
        this.params.push(encodeURI(key + "=" + value));
    }

    print() {
        return `${this.path}?${this.params.join("&")}`;
    }
}

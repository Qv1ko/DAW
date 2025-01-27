console.log("--- Ejercicio 8 B ---");

/*
 * Repite el ejercicio B anterior, utilizando el método POST en lugar de GET.
 */

document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("localidad");

    input.addEventListener("keydown", (e) => {
        if (e.key === "Enter" && e.target.value !== "") {
            connection(e.target.value);
        }
    });
});

async function connection(location) {
    const result = document.getElementById("resultado");

    try {
        let response = await fetch(
            new URL("./php/ejercicio4.php", window.location.href),
            {
                method: "POST",
                body: `localidad=${location}`,
                headers: {
                    "Content-type": "application/x-www-form-urlencoded",
                },
            }
        );

        if (!response.ok) {
            throw new Error("No se puedo acceder a la URL.");
        }

        let data = await response.text();
        let isCorrect = data === "S" ? true : false;

        result.textContent = isCorrect
            ? "La ciudad esta incluida dentro de la lista"
            : "La ciudad no esta incluida dentro de la lista";
        result.style.color = isCorrect ? "green" : "red";
    } catch (err) {
        console.error(`⚠️${err}`);
    }
}

console.log("--- Ejercicio 8 ---");

/*
 * Repite el ejercicio anterior, utilizando el método POST en lugar de GET.
 */

document.addEventListener("keydown", (e) => {
    let input = document.getElementById("localidad");
    let result = document.getElementById("resultado");

    if (e.key === "Enter" && input.value !== "") {
        fetch(new URL("./php/ejercicio4.php", window.location.href), {
            method: "POST",
            body: `localidad=${input.value}`,
            headers: {
                "Content-type": "application/x-www-form-urlencoded",
            },
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error("No se puedo acceder a la URL.");
                }
                return response.text();
            })
            .then((data) => {
                let response = data === "S" ? true : false;
                result.textContent = response
                    ? "La ciudad esta incluida dentro de la lista"
                    : "La ciudad no esta incluida dentro de la lista";
                result.style.color = response ? "green" : "red";
            })
            .catch((err) => {
                console.error(`⚠️${err}`);
            });
    }
});

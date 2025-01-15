console.log("--- Ejercicio 4 ---");

/*
 * Repite el ejercicio anterior, utilizando el método POST en lugar de GET.
 */

document.addEventListener("keydown", (e) => {
    let input = document.getElementById("localidad");
    let result = document.getElementById("resultado");

    if (e.key === "Enter" && input.value !== "") {
        let xhr = new XMLHttpRequest();
        let data = new FormData();
        data.append("localidad", input.value);

        xhr.open("POST", "./php/ejercicio4.php");
        xhr.addEventListener("load", () => {
            if (!(xhr.status != 200)) {
                let response = xhr.responseText === "S" ? true : false;
                result.textContent = response
                    ? "La ciudad esta incluida dentro de la lista"
                    : "La ciudad no esta incluida dentro de la lista";
                result.style.color = response ? "green" : "red";
            }
        });

        xhr.send(data);
    }
});

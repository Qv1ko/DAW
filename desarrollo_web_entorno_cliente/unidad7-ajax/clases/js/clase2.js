console.log("-- Clase 2 --");

document.addEventListener("keydown", (e) => {
    let input = document.getElementById("localidad");
    let result = document.getElementById("resultado");

    if (e.key === "Enter" && input.value !== "") {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "./php/clase2.php");
        xhr.setRequestHeader("Content-Type", "application/json; charset=utf-8");

        xhr.addEventListener("load", () => {
            if (!(xhr.status != 200)) {
                let response = xhr.responseText === "S" ? true : false;
                result.textContent = response
                    ? "La ciudad esta incluida dentro de la lista"
                    : "La ciudad no esta incluida dentro de la lista";
                result.style.color = response ? "green" : "red";
            }
        });

        xhr.send(JSON.stringify({ localidad: input.value }));
    }
});

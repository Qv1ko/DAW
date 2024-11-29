console.log("-- Clase 2 --");

table = document.getElementById("bagua-table");

table.addEventListener("click", (e) => {
    let celda = e.target.closest("td");
    if (celda) {
        highlights = document.getElementsByClassName("highlight");
        Array.from(highlights).forEach((element) => {
            element.classList.remove("highlight");
        });
        celda.classList.add("highlight");
    }
});

console.log("-- Clase 2 --");

table = document.getElementById("bagua-table");

table.addEventListener("click", (e) => {
    if (e.target.tagName == "TD") {
        highlights = document.getElementsByClassName("highlight");
        Array.from(highlights).forEach((element) => {
            element.classList.remove("highlight");
        });
        e.target.classList.add("highlight");
    }
});

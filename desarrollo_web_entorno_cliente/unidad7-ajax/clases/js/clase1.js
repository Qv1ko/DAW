console.log("-- Clase 1 --");

let xhr = new XMLHttpRequest();
// xhr.open("POST", "./data/clase1.txt");

// xhr.addEventListener("load", () => {
//     let p = document.getElementById("texto");
//     p.textContent =
//         xhr.status != 200 ? "ERROR: " + xhr.statusText : xhr.response;
// });

// xhr.responseType = "json";
// xhr.open("POST", "./data/clase1.json");

// xhr.addEventListener("load", () => {
//     let p = document.getElementById("texto");
//     p.textContent =
//         xhr.status != 200
//             ? "ERROR: " + xhr.statusText
//             : xhr.response.author.email;
// });

// xhr.responseType = "text";
xhr.responseType = "json";
xhr.open("POST", "./php/clase1.php");

xhr.addEventListener("load", () => {
    let p = document.getElementById("texto");
    p.textContent =
        xhr.status != 200
            ? "ERROR: " + xhr.statusText
            : "Ben: " + xhr.response["Ben"];
});

xhr.send();

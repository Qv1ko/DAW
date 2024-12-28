console.log("-- Clase 6 --");

let props = {
    geometry: [
        "clientLeft",
        "clientTop",
        "clientWidth",
        "clientHeight",
        "offsetWidth",
        "offsetHeight",
        "scrollWidth",
        "scrollHeight",
    ],
    scroll: ["scrollLeft", "scrollTop"],
    offsetParent: ["offsetParent", "offsetLeft", "offsetTop"],
};

info.innerHTML = "<h3>Click to see the value:</h3>";
for (let k in props) {
    info.innerHTML += `<h4>${k}</h4>`;
    let prop = props[k];
    for (let i = 0; i < prop.length; i++) {
        info.innerHTML +=
            "<span class='key'>" +
            prop[i] +
            '</span>: <span id="' +
            prop[i] +
            '">&nbsp;</span>' +
            " ";
        i++;
        if (i < prop.length) {
            info.innerHTML +=
                "<span class='key'>" +
                prop[i] +
                '</span>: <span id="' +
                prop[i] +
                '">&nbsp;</span>';
        }
        info.innerHTML += "<br/>";
    }
}

document.onclick = function (event) {
    let target = event.target;
    if (!target.classList.contains("key")) return;

    let prop = target.innerHTML;
    let value = example[prop];
    value = value.tagName || value;
    document.getElementById(prop).innerHTML = value;
};

document.onmousemove = function (e) {
    document.getElementById("mouse").innerHTML =
        Math.round(e.clientX) + ":" + Math.round(e.clientY);
};

let d = document.getElementById("example");

let estilos = getComputedStyle(d);

console.log("Ancho del elemento example: " + estilos.width);
console.log("Overflow del elemento example: " + estilos.overflow);

console.log(
    "Alto de la ventana: " + document.documentElement.clientHeight + "px"
);
console.log(
    "Ancho de la ventana: " + document.documentElement.clientWidth + "px"
);

console.log("Cordenadas de elemento:");
console.log(d.getBoundingClientRect());

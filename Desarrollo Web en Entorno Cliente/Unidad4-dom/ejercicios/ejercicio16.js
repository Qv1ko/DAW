console.log("--- Ejercicio 16 ---");

/*
 * Escribe una función createTree que crea una lista ramificada ul/li
 *  desde un objeto ramificado.
 */

let data = {
    Fish: {
        trout: {},
        salmon: {},
    },
    Tree: {
        Huge: {
            sequoia: {},
            oak: {},
        },
        Flowering: {
            "apple tree": {},
            magnolia: {},
        },
    },
};

function createTree(container, data) {
    let ul = document.createElement("ul");
    Object.keys(data).forEach((item) => {
        let value = data[item];
        let li = document.createElement("li");
        li.textContent = item;
        ul.append(li);
        if (value && Object.keys(value).length > 0) {
            createTree(ul, value);
        }
    });
    container.append(ul);
}

createTree(document.getElementById("tree"), data);

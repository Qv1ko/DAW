// Ejercicio 1

function borrarHoja(texto) {
    hojas = document.getElementsByClassName("hoja");
    len = hojas.length;

    for (let i = 0; i < hojas.length; i++) {
        if (hojas[i].textContent == texto) {
            hojas[i].remove();
            console.log("Hoja " + texto + " borrada");
            break;
        }
    }

    if (len == hojas.length) {
        console.log("La hoja " + texto + " no existe");
    }
}

borrarHoja("Hoja D");
borrarHoja("Hoja A_1");
borrarHoja("Hoja C_2");
borrarHoja("Hoja D_1");
borrarHoja("Rama B");

function insertarHoja(textoRama, textoHoja) {
    ramas = document.getElementsByClassName("rama");
    ramaExistente = false;

    for (let i = 0; i < ramas.length; i++) {
        if (ramas[i].childNodes[0].textContent.trim() == textoRama) {
            ramaExistente = true;

            hoja = document.createElement("li");
            hoja.classList.add("hoja");
            hoja.textContent = textoHoja;

            ramas[i].getElementsByTagName("ul")[0].append(hoja);

            console.log("Hoja " + textoHoja + " insertada");
            break;
        }
    }

    if (!ramaExistente) {
        console.log("La rama " + textoRama + " no existe");
    }
}

insertarHoja("Rama E", "hoja nueva");
insertarHoja("Rama C", "hoja nuevaC");
insertarHoja("Rama B_A", "hoja nuevaB_A");
insertarHoja("Rama D", "hoja nuevaD");

function saluda(nombre, apellido) {
    if (nombre == undefined) return "Nombre sin definir";
    // nombre = nombre ? nombre : "";
    // apellido = apellido ? apellido : "";
    console.log("***");
    return nombre + " " + apellido;
}

console.log(saluda());
console.log(saluda("Jose"));

function saludaSiempre(nombre = "Manuel", apellido = "Gutierrez") {
    return nombre + " " + apellido;
}

console.log(saludaSiempre(undefined, "Ojaz")); // Ojaz
console.log(saludaSiempre(null, "Ojaz")); // nullOjaz

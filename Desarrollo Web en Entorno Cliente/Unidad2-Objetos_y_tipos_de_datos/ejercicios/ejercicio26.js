console.log("--- Ejercicio 26 ---");

let john = {
    nombre: "John",
    apellido: "Smith",
    id: 1,
};
let pete = {
    nombre: "Pete",
    apellido: "Hunt",
    id: 2,
};
let mary = {
    nombre: "Mary",
    apellido: "Key",
    id: 3,
};

let usuarios = [john, pete, mary];
let usuariosMapeados = usuarios.map((usuario) => ({
    id: usuario.id,
    nombreCompleto: usuario.nombre + " " + usuario.apellido,
}));

alert(usuariosMapeados[0].id);
alert(usuariosMapeados[0].nombreCompleto);
console.log(usuariosMapeados);

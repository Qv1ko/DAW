console.log("--- Ejercicio 26 ---");

/*
 * Escribe el código para crear otro array a partir de este, de objetos con id y nombreCompleto, donde
 *  nombreCompleto es generado a partir de nombre y apellido.
 */

john = {
    nombre: "John",
    apellido: "Smith",
    id: 1,
};
pete = {
    nombre: "Pete",
    apellido: "Hunt",
    id: 2,
};
mary = {
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

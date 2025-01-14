console.log("--- Ejercicio 7 ---");

/*
 * Crea una página web con HTML y JavaScript que permita la reserva online de salas para reuniones
 *  de una empresa.
 * En un formulario se deben recoger y validar los siguientes datos, todos obligatorios excepto el
 *  número de socio:
 * - Nombre y apellidos (texto).
 * - DNI.
 * - Número de personas.
 * - Sala con cocina: pueden ser con cocina o sin cocina (se debe hacer mediante una selección
 *    mediante radiobutton).
 * - Número de socio. El número de socio está compuesto por dos letras al principio seguido de 3 dígitos.
 * Las salas con cocina por día cuestan 150 €, y las que no tienen cocina cuestan 100 €. Además, si
 *  es socio se le hará un descuento del 10 %.
 * Se podrán realizar las siguientes operaciones:
 * - Reservar: permitirá reservar una sala solicitando la información anterior. No permitirá que un
 *    DNI reserve dos veces. Además, se ha de tener en cuenta que existen para alquilar 4 salas con
 *    cocina y 3 sin cocina. Se ha de tener en cuenta que la capacidad máxima de las salas es de 25.
 * - Anular: introduciendo el DNI me permitirá anular una reserva.
 * - Mostrar: mostrará todas las reservas realizadas.
 * Aclaraciones:
 * - Para poder almacenar la información se utilizará un array de objetos.
 * - Si los datos introducidos en el formulario no son correctos, se informará sobre el error y no
 *    se realizará la reserva hasta que se corrijan.
 */

let reserves = [];

const RESERVE_BTN = document.getElementById("reserve");
const VIEW_BTN = document.getElementById("view");
const CANCEL_BTN = document.getElementById("cancel");

RESERVE_BTN.addEventListener("click", (e) => {
    const NAME_INPUT = document.getElementById("name");
    const DNI_INPUT = document.getElementById("dni");
    const PERSONS_INPUT = document.getElementById("persons");
    const RADIOS = document.querySelectorAll("input[name='room_type']");
    const PARTNER_INPUT = document.getElementById("partner");

    if (
        !inputsValidator([NAME_INPUT, DNI_INPUT, PERSONS_INPUT, RADIOS]) &&
        !dniAlreadyReserved(DNI_INPUT.value)
    ) {
        const withKitchen =
            [...RADIOS].find((r) => r.checked).id === "with-kitchen";
        const newReserve = new Reserve(
            NAME_INPUT.value,
            DNI_INPUT.value,
            parseInt(PERSONS_INPUT.value),
            withKitchen,
            PARTNER_INPUT.value
        );
        if (newReserve.id) {
            reserves.push(newReserve);
            sendNotification(
                "success",
                `Reserva realizada con éxito para la sala ${newReserve.id}`
            );
        }
    }
    e.preventDefault();
});

VIEW_BTN.addEventListener("click", (e) => {
    if (reserves.length > 0) {
        let reserveList = "Reservas realizadas:\n\n";
        reserves.forEach((r) => {
            reserveList += `Nombre: ${r.name}, DNI: ${r.dni}, Personas: ${r.persons}, Sala: ${r.id}, Precio: ${r.price}€\n`;
        });
        alert(reserveList);
    } else {
        sendNotification("info", "No hay reservas realizadas.");
    }
    e.preventDefault();
});

CANCEL_BTN.addEventListener("click", (e) => {
    const DNI_INPUT = prompt("Introduce el DNI de la reserva a cancelar:");
    const index = reserves.findIndex((r) => r.dni === DNI_INPUT);

    if (index !== -1) {
        reserves[index].releaseRoom();
        reserves.splice(index, 1);
        sendNotification("success", "Reserva cancelada con éxito.");
    } else {
        sendNotification("error", "No se encontró una reserva con ese DNI.");
    }
    e.preventDefault();
});

class Reserve {
    id;
    name;
    dni;
    persons;
    partner;
    type;
    price;

    static roomsWithKitchen = ["10", "12", "14", "16"];
    static roomsWithoutKitchen = ["11", "13", "15"];
    static reservedRooms = [];

    constructor(name, dni, persons, withKitchen, partner) {
        this.name = name;
        this.dni = dni;
        this.persons = persons;
        this.type = withKitchen;
        this.partner = partner;
        this.id = this.checkDisponibility();
        if (this.id) {
            this.price = this.calcPrice();
            Reserve.reservedRooms.push(this.id);
        }
    }

    checkDisponibility() {
        try {
            if (this.persons > 25) {
                throw new Error(
                    "La capacidad máxima de las salas es de 25 personas."
                );
            }

            const availableRooms = this.type
                ? Reserve.roomsWithKitchen
                : Reserve.roomsWithoutKitchen;

            const freeRoom = availableRooms.find(
                (room) => !Reserve.reservedRooms.includes(room)
            );

            if (freeRoom) {
                return freeRoom;
            } else {
                throw new Error(
                    `No hay habitaciones ${
                        this.type ? "con cocina" : "sin cocina"
                    } disponibles.`
                );
            }
        } catch (error) {
            sendNotification("error", error.message);
            return null;
        }
    }

    calcPrice() {
        const basePrice = this.type ? 150 : 100;
        const discount = /^[a-zA-Z]{2}[0-9]{3}$/.test(this.partner) ? 0.9 : 1;
        return basePrice * discount;
    }

    releaseRoom() {
        const roomIndex = Reserve.reservedRooms.indexOf(this.id);
        if (roomIndex !== -1) {
            Reserve.reservedRooms.splice(roomIndex, 1);
        }
    }
}

function sendNotification(type, message) {
    let icon = "";
    switch (type) {
        case "info":
            icon = "ℹ️";
            break;
        case "success":
            icon = "✅";
            break;
        case "warning":
            icon = "⚠️";
            break;
        case "error":
            icon = "❌";
            break;
        default:
            break;
    }

    alert(icon + " " + message);
}

function inputsValidator(inputs) {
    const RADIO_BOX = document.getElementById("radio-box");
    let badInputs = [];

    inputs.forEach((input) => {
        let isValid = true;

        switch (input.id) {
            case "name":
                isValid = nameValidator(input.value);
                break;
            case "dni":
                isValid = dniValidator(input.value);
                break;
            case "persons":
                isValid = personsValidator(input.value);
                break;
            default:
                isValid = checkedValidator(input);
                break;
        }

        if (!isValid) {
            badInputs.push(input);
        } else {
            if (isNodeList(input)) {
                RADIO_BOX.style.borderColor = "";
            } else {
                input.style.borderColor = "";
            }
        }
    });

    if (badInputs.length > 0) {
        badInputs.forEach((input) => {
            if (isNodeList(input)) {
                RADIO_BOX.style.borderColor = "red";
            } else {
                input.style.borderColor = "red";
            }
        });
        if (!isNodeList(badInputs[0])) {
            badInputs[0].focus();
        }
    }

    return badInputs.length > 0;
}

function dniAlreadyReserved(dni) {
    if (reserves.some((r) => r.dni === dni)) {
        sendNotification("error", "El DNI ya tiene una reserva realizada.");
        return true;
    }
    return false;
}

function nameValidator(name) {
    return /^([a-zA-Z]+[ ]?)+$/g.test(name);
}

function dniValidator(dni) {
    let validChars = "TRWAGMYFPDXBNJZSQVHLCKET";
    let nifExp = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
    let nieExp = /^[XYZ][0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
    let str = dni.toString().toUpperCase();

    if (!nifExp.test(str) && !nieExp.test(str)) return false;

    let nie = str
        .replace(/^[X]/, "0")
        .replace(/^[Y]/, "1")
        .replace(/^[Z]/, "2");

    let letter = str.substr(-1);
    let charIndex = parseInt(nie.substr(0, 8)) % 23;

    return validChars.charAt(charIndex) === letter;
}

function personsValidator(personsNumber) {
    return (
        /(2[0-5])|(1[0-9])|([2-9])/g.test(personsNumber) && personsNumber > 1
    );
}

function checkedValidator(radios) {
    for (const radio of radios) {
        if (radio.checked) {
            return true;
        }
    }
    return false;
}

function isNodeList(item) {
    return item instanceof NodeList;
}

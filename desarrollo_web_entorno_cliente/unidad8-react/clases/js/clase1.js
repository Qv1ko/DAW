import { create, createReportList } from "../modules/clase1-canvas.js";
import {
    name,
    draw,
    reportArea,
    reportPerimeter,
} from "../modules/clase1-square.js";
import randomSquare from "../modules/clase1-square.js";

console.log("-- Clase 1 --");

let myCanvas = create("myCanvas", document.body, 480, 320);
let reportList = createReportList(myCanvas.id);

let square1 = draw(myCanvas.ctx, 50, 50, 100, "blue");
reportArea(square1.length, reportList);
reportPerimeter(square1.length, reportList);

// Use the default
let square2 = randomSquare(myCanvas.ctx);

import React from "https://esm.sh/react@18.2.0";
import ReactDOM from "https://esm.sh/react-dom@18.2.0/client";

console.log("--- Tutorial - React ---");

const appDomElement = document.getElementById("app");

const root = ReactDOM.createRoot(appDomElement);

const rce = React.createElement;

const button = rce("button", { "data-id": 123 }, "Button 1");
const button2 = rce("button", { "data-id": 456 }, "Button 2");
const button3 = rce("button", { "data-id": 789 }, "Button 3");

const app = rce(React.Fragment, null, [button, button2, button3]);

root.render(app);

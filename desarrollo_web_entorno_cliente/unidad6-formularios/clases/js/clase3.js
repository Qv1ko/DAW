console.log("-- Clase 3 --");

localStorage.setItem("test", 1);
console.log(localStorage.getItem("test"));

document.cookie = "cookie=micookie";
console.log(document.cookie);

localStorage.setItem("valor", "cadena-simple");

sessionStorage.setItem("dato", "dato de sesión");

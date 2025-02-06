const taskInput = document.getElementById("task");
const btn = document.getElementById("btn");
const list = document.getElementById("tasks-list");

btn.addEventListener("click", (e) => {
    let li = document.createElement("li");
    li.textContent = taskInput.value;

    let editBtn = document.createElement("button");
    editBtn.textContent = "Editar";
    editBtn.addEventListener("click", editar);

    let delBtn = document.createElement("button");
    delBtn.textContent = "Eliminar";
    delBtn.addEventListener("click", eliminar);

    li.append(editBtn);
    li.append(delBtn);

    list.append(li);

    e.preventDefault();
});

function editar(e) {
    let li = e.target.parentElement;

    if (li) {
        let editForm = document.createElement("form");
        let changeInput = document.createElement("input");
        let saveBtn = document.createElement("button");

        editForm.setAttribute("action", "#");
        editForm.setAttribute("method", "POST");

        changeInput.value = li.childNodes[0].textContent;
        changeInput.setAttribute("id", "changedTask");

        saveBtn.textContent = "Guardar";
        saveBtn.addEventListener("click", saveChange);

        editForm.appendChild(changeInput);
        editForm.appendChild(saveBtn);

        li.innerHTML = "";
        li.appendChild(editForm);
    }

    e.preventDefault();
}

function saveChange(e) {
    let li = e.target.parentElement.parentElement;
    let task = document.getElementById("changedTask");
    li.innerHTML = "";

    if (li && task) {
        li.textContent = task.value;

        let editBtn = document.createElement("button");
        editBtn.textContent = "Editar";
        editBtn.addEventListener("click", editar);

        let delBtn = document.createElement("button");
        delBtn.textContent = "Eliminar";
        delBtn.addEventListener("click", eliminar);

        li.append(editBtn);
        li.append(delBtn);
    }

    e.preventDefault();
}

function eliminar(e) {
    let li = e.target.parentElement;

    if (li) {
        li.outerHTML = "";
    }
}

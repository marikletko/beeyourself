let ul = document.createElement('ul');
let todoItems = []

function clear() {
    alert('clear');
}

function addTask() {
    let task = document.getElementById("task-field").value;
    let div = document.getElementById("uncmp");
    div.style.display = 'block';
    let fam = imp.value;
    if (fam == "") {
        alert('Ты фто, хочешь добавить пустой таск!?')
    }
    else {
        alert('Here')
        let li = createElement('li');
        ul.appendChild(li);
        div.appendChild(ul);
        li.innerHTML += fam;
    }
}

function deleteTask() {

}

function completeTask() {

}
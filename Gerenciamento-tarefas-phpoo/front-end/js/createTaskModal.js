let createTaskModal=document.getElementById("createTaskModal")
let createTaskBtn=document.getElementById("createTaskBtn")
let closeModalBtn=document.getElementById("closeModalBtn")

function closeModalFunction(){
    createTaskModal.classList.toggle("create-task-modal-show")
}

createTaskBtn.addEventListener("click", closeModalFunction)
closeModalBtn.addEventListener("click",closeModalFunction)
createTaskModal.addEventListener("submit", closeModalFunction)

let titleInput=document.getElementById("title");
let caracterCountElement = document.getElementById("caracterCounter");

function counterText(e){
    let titleInputValue=titleInput.value
    let caracterCount=titleInputValue.length;
    caracterCountElement.innerText=caracterCount;

    if(caracterCount>=150){
        caracterCountElement.style.color="red";
    }
}


titleInput.addEventListener("input",counterText);

let taskList=document.getElementById("taskList");   

taskList.addEventListener("click", (e)=>{
    const clickedTask=e.target;
    const descriptionModal = clickedTask.closest(".task").querySelector(".task-description-modal");
    /* const descriptionModal = clickedTask.querySelector(".task-description-modal"); */
    const openedModal=document.querySelectorAll(".task-description-modal-show");

    if(clickedTask.classList.contains("task") || clickedTask.classList.contains("task-title")){
        descriptionModal.classList.add("task-description-modal-show");
    }else if(clickedTask.classList.contains("task-description-modal-show") || clickedTask.classList.contains("task-description")){
        openedModal.forEach(modal=>{
            modal.classList.remove("task-description-modal-show");
        })
    }
})
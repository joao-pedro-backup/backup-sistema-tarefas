let taskForm=document.getElementById("createTaskForm");
let tasksList=document.getElementById("taskList");

function getTasks(){
   fetch("/backup-sistema-tarefas/Gerenciamento-tarefas-phpoo/classes/api/TasksAPI.php")
    .then((response)=>response.json())
    .then((data)=>{
        data.forEach((task)=>{
            let taskItem=document.createElement("li");
            taskItem.className="task";
            taskItem.dataset.id=task.id

            /* let taskTitleDiv=document.createElement("div");
            taskTitleDiv.className="task-title-div";
            taskTitleDiv.dataset.id=task.id; */

            let titleElement=document.createElement("h2");
            titleElement.className="task-title";
            titleElement.textContent=task.title;
            /* titleElement.dataset.id=task.id; */
            
            let spanIcons=document.createElement("span");
            spanIcons.className="task-icons";

            let checkedIcon=document.createElement("i");
            checkedIcon.className="fa-solid fa-circle-check";

            let modifyIcon=document.createElement("i");
            modifyIcon.className="fa-solid fa-pen";

            let deleteIcon=document.createElement("i");
            deleteIcon.className="fa-solid fa-trash";

            let taskDescriptionModal=document.createElement("div")
            taskDescriptionModal.className="task-description-modal";
            taskDescriptionModal.id="taskDescriptionModal";
            taskDescriptionModal.dataset.id=task.id;
            
            let taskDescription=document.createElement("div")
            taskDescription.className="task-description";

            let p=document.createElement("p");
            p.textContent=task.description;

            taskDescription.appendChild(p);

            taskDescriptionModal.appendChild(taskDescription);

            spanIcons.appendChild(checkedIcon);
            spanIcons.appendChild(modifyIcon);
            spanIcons.appendChild(deleteIcon);

            /* taskTitleDiv.appendChild(spanIcons);
            taskTitleDiv.appendChild(titleElement); */

            /* taskItem.appendChild(taskTitleDiv); */
            taskItem.appendChild(taskDescriptionModal);
            taskItem.appendChild(titleElement);
            taskItem.appendChild(spanIcons);
            tasksList.appendChild(taskItem);
        })
   })
    .catch((error)=>console.log(error));   
}

getTasks();
setInterval(getTasks,10000)
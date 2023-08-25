const createTaskForm=document.getElementById("createTaskForm");
const alertDiv = document.querySelector("#alertDiv");

createTaskForm.addEventListener("submit",e=>{
    e.preventDefault();
    const data=new URLSearchParams();
    for(const i of new FormData(createTaskForm)){
        data.append(i[0], i[1]);
    }
    fetch("/backup-sistema-tarefas/Gerenciamento-tarefas-phpoo/classes/api/TasksAPI.php",{
        method: 'POST',
        body: data
    }).then(response=>response.text()).then(response=>{
        alertDiv.innerHTML=response;
        alertDiv.classList.add("show");
        setTimeout(() => {
        alertDiv.classList.remove("show"); 
        }, 4000);
        console.log(response)
    }).catch(error=>console.log(error));
    })
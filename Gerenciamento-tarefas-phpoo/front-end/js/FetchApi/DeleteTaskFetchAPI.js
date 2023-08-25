taskList.addEventListener("click", (e)=>{
    const clickedTask=e.target;
    const taskDeleteButton=clickedTask.closest(".fa-solid");
    const taskId=taskDeleteButton.closest(".task").getAttribute("data-id");

    fetch("/backup-sistema-tarefas/Gerenciamento-tarefas-phpoo/classes/api/TasksAPI.php", {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ taskId: taskId })
    })
    .then(response=>response.json())
    .then(response=>{
        alertDiv.innerHTML=response;
        alertDiv.classList.add("show");
        setTimeout(() => {
        alertDiv.classList.remove("show"); 
        }, 4000);
        console.log(response)
    }).catch(error=>console.log(error));
})
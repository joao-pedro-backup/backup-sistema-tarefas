<?php
include_once"./partials/head.php";
?>
<body class="task-body">
    <main>
        <div class="page-title">
            <h1>Suas Tarefas</h1>
        </div>

        <div class="alert-div" id="alertDiv">
            
        </div>

        <div class="task-div">
            <ul class="task-list" id="taskList">
                <!-- <li class="task" id="task">
                    <div class="task-title-div">
                    <h2 class="task-title" id="taskTitle" data-modal="">Comprar Pão</h2>
                    <span class="task-icons">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-pen"></i>
                        <i class="fa-solid fa-trash"></i>
                    </span>
                    </div> 
                    <div class="task-description-modal" id="taskDescriptionModal">
                        <div class="task-description" id="taskDescription">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, .</p>
                        </div>
                    </div>
                </li> -->
            </ul>
            <button class="create-task-btn" id="createTaskBtn">Criar Tarefas</button>
            <div class="paginator-div">
                <div class="paginator" id="paginator">
                    
                </div>
            </div>
        </div>

        <div class="create-task-modal" id="createTaskModal">
            <div class="modal-title">
                <h2>Criar tarefas!</h2>
            </div>

            <div class="close-modal-btn" id="closeModalBtn">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <form method="POST" enctype="application/x-www-form-urlencoded" class="create-task-form" id="createTaskForm" name="createTaskForm">
                <label for="title">Digite o titulo da tarefa!</label>
                <input type="text" name="taskTitle" id="title" class="title-input" required maxlength="150">
                <span class="caracter-counter"><i id="caracterCounter"></i>/150</span>

                <label for="description">Digite a tarefa!</label>
                <textarea type="text" name="taskDescription" id="description" class="description-input" required></textarea>

                <button class="submit-btn" id="submitBtn">Criar</button>
            </form>
        </div>
    </main>
    
</body>
</html>
let tasks=[];
function addTask(task){

    tasks.push(task);
    
}

function list(){
    console.log("Lista de tarefas:");
    tasks.forEach((task,index )=>{
    console.log(`${index +1}. ${task} `);
    });
}

addTask("Comprar pão");
addTask("Estudar Node.js");
list();
const tasks = [];
let nextId = 1;

// Create a new task
function createTask(title) {
    const newTask = {
        id: nextId++,
        title: title,
        completed: false
    };
    tasks.push(newTask);
    return newTask;
}

// Update a task
function updateTask(id, updatedTask) {
    const index = tasks.findIndex(task => task.id === id);
    if (index === -1) {
        return null; // Task not found
    }
    tasks[index] = { ...tasks[index], ...updatedTask };
    return tasks[index];
}
function update(id, title, iscompleted){
    tasks[id].title =title;
    tasks[id].completed =iscompleted;
}

// Delete a task
function deleteTask(id) {
    const index = tasks.findIndex(task => task.id === id);
    if (index === -1) {
        return false; // Task not found
    }
    tasks.splice(index, 1);
    return true;
}

// Find all completed tasks
function findCompletedTasks() {
    return tasks.filter(task => task.completed);
}

// Get all tasks
function getAllTasks() {
    return [...tasks];
}

// Example usage:

// Creating tasks
createTask("Task 1");
createTask("Task 2");
createTask("Task 3");

// Updating a task
updateTask(2, { title: "Updated Task 2", completed: true });

// Deleting a task
deleteTask(1);

// Finding completed tasks
const completedTasks = findCompletedTasks();
console.log(completedTasks);
// Output:
// [
//     { id: 2, title: "Updated Task 2", completed: true }
// ]

// Display all tasks
console.log(getAllTasks());
// Output:
// [
//     { id: 2, title: "Updated Task 2", completed: true },
//     { id: 3, title: "Task 3", completed: false }
// ]

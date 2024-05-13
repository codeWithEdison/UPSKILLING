// function to create empty queue
function createQueue(){
    return [];
}

function enqueue(queue, data){
    queue.push(data);
}

function dequeue(queue){
    return queue.shift();
}

const myQueue = createQueue();
const secondQueue = createQueue();
enqueue(myQueue, 3);
enqueue(myQueue, 5);
enqueue(myQueue, 10);
console.log(myQueue);
console.log(dequeue(myQueue))
console.log(myQueue);

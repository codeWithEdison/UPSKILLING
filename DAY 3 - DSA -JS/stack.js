function createStack() {
    return [];
}

function push(stack, item) {
    stack.push(item);
}

function pop(stack) {
    return stack.pop();
}

// Example usage:
const myStack = createStack();
push(myStack, 1);
push(myStack, 2);
push(myStack, 3);
console.log(pop(myStack)); // Output: 3

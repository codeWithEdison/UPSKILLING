// Create a new node with a given value
function createNode(value) {
    return {
        value,    // The data of the node
        next: null  // Pointer to the next node (initially null)
    };
}

// Append a new node with a given value to the end of the list
function append(head, value) {
    const newNode = createNode(value);  // Create a new node
    if (!head) {
        return newNode;  // If the list is empty, the new node becomes the head
    }
    let current = head;
    while (current.next) {
        current = current.next;  // Traverse to the end of the list
    }
    current.next = newNode;  // Link the last node to the new node
    return head;
}

// Print the values in the list
function printList(head) {
    let current = head;
    while (current) {
        console.log(current.value);  // Print the value of the current node
        current = current.next;  // Move to the next node
    }
}

// Example usage
let head = null;
head = append(head, 1);  // List: 1
head = append(head, 2);  // List: 1 -> 2
head = append(head, 3);  // List: 1 -> 2 -> 3
printList(head);  // Output: 1, 2, 3

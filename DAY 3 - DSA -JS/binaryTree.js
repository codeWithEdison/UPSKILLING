// Function to create a new tree node
function createTreeNode(value) {
    return {
        value,
        left: null,
        right: null
    };
}

// Function to insert a new node into the binary tree
function insertNode(root, value) {
    const newNode = createTreeNode(value);
    if (!root) {
        return newNode; // If the tree is empty, the new node becomes the root
    }
    const queue = [root];
    while (queue.length) {
        const current = queue.shift();
        if (!current.left) {
            current.left = newNode; // Insert node as the left child if left child is empty
            return root; // Return the root of the tree
        } else {
            queue.push(current.left); // Add the left child to the queue for further processing
        }
        if (!current.right) {
            current.right = newNode; // Insert node as the right child if right child is empty
            return root; // Return the root of the tree
        } else {
            queue.push(current.right); // Add the right child to the queue for further processing
        }
    }
}

// Function to perform in-order traversal of the binary tree
function inorderTraversal(node) {
    if (node) {
        inorderTraversal(node.left); // Traverse left subtree
        console.log(node.value); // Visit the current node
        inorderTraversal(node.right); // Traverse right subtree
    }
}

// Example usage
let root = null;
root = insertNode(root, 1);
root = insertNode(root, 2);
root = insertNode(root, 3);
inorderTraversal(root);

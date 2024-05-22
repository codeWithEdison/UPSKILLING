// Function to create an empty graph
function createGraph() {
    return new Map();
}

// Function to add a vertex to the graph
function addVertex(graph, vertex) {
    if (!graph.has(vertex)) {
        graph.set(vertex, []); // Initialize an empty array for storing edges
    }
}

// Function to add an edge between two vertices in the graph
function addEdge(graph, vertex1, vertex2) {
    graph.get(vertex1).push(vertex2); // Add vertex2 to the adjacency list of vertex1
    graph.get(vertex2).push(vertex1); // Add vertex1 to the adjacency list of vertex2
}

// Function to print the graph
function printGraph(graph) {
    for (const [vertex, edges] of graph.entries()) {
        console.log(`${vertex} -> ${edges.join(', ')}`); // Print each vertex and its adjacent vertices
    }
}

// Example usage
const graph = createGraph();
addVertex(graph, 'A');
addVertex(graph, 'B');
addVertex(graph, 'C');
addEdge(graph, 'A', 'B');
addEdge(graph, 'A', 'C');
printGraph(graph);

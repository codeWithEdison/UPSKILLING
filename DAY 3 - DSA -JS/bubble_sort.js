function bubbleSort(arr) {
    const n = arr.length;  // time : 1
    for (let i = 0; i < n - 1; i++) { // time : n+1
        for (let j = 0; j < n - i - 1; j++) {  // time : n(n+1)
            if (arr[j] > arr[j + 1]) {
                // Swap arr[j] and arr[j + 1]
                let temp = arr[j]; // time:  n(n)(1)
                arr[j] = arr[j + 1];  // time : n(n)(1)
                arr[j + 1] = temp; //time:  n(n)(1)
            }
        }
    }
    return arr;
} //  time complexity : 1 + n+1 + n^2 + n + n^2 + n^2 + n^2  4n^2 + 2n + 2 => 0(n^2)= 

// Example usage:
const array = [0, 3, 5, 4, 2];
console.log("Original Array:", array);
console.log("Sorted Array (Bubble Sort):",
 bubbleSort(array.slice())); // Slice to avoid modifying the original array

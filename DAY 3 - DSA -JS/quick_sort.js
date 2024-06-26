function quickSort(arr){
    if(arr.length<=1){
        return arr
    }

    const pivot = arr[Math.floor(arr.length/2)];
    const left =[];
    const right =[];
    for(let i =0; i< arr.length; i++){
        if(arr[i] < pivot){
            left.push(arr[i]);
        } else if(arr[i] > pivot){
            right.push(arr[i]);
        }
    }
    return quickSort(left).concat(pivot,quickSort(right));
}

const a = [5,3,8,4,2];
console.log("original array: ", a);
console.log("sorted array: ", quickSort(a));
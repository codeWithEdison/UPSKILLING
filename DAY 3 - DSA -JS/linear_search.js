function linearSerch(arr, target){
    for(let i =0; i<arr.length; i++){
        if(arr[i]==target){
            return i;
        }
    }
    return -1; // target not found 
}

// example usage
const array=  [5,3,8,4,2];
const target = 20;
console.log("array : ", array);
console.log("liner search : index of : ",
 target, " = ", linearSerch(array, target));
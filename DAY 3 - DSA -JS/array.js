// variable declaration : let, const, var
// array method  : map
const arrayNmae =[1,3,5,6,7,2]; // n
// const result = arrayNmae.map(function (a) {
//     return a
// });
// use for to display data of arra;

for(let i=0; i<arrayNmae.length; i++ ){ //  n+1
    console.log(arrayNmae[i]); // n
}
// console.log(result);

// overlal time complexity = n+ n+1 + n; => 3n +1  => O(n)
// space complexity  ArrayName =n, i = 1 => n+1 = S(n)

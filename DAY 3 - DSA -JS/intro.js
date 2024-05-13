function swap(a, b){
    console.log("a= ", a, " b= ", b);// 1
    temp = a;//1
    a=b;//1
    b=temp; //1
    console.log("new a= ",a, " new value b = ", b) //1
}
console.time('swap: ');
swap(1,2);
swap(10,20);
swap(100,200);
console.timeEnd('swap: ');
 // time function = O(1)
 // space complexity  : a, b,temp  =  s(1);

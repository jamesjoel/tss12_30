/*
reverse a array without useing any function
*/
var arr = ["red", "green", "blue", "yellow", "pink", "black"];
console.log(arr);

var n = arr.length-1;
var arr2=[];

for(var i=n; i>=0; i--)
{
    arr2.push(arr[i]);
}
console.log(arr2);
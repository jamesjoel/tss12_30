// var x = require("./mod1");
// console.log(x);

var demo = function(a, b){
    var ans = a*b;
    return ans;
}

var a = demo(12, 15);

var b = demo;
var c = b;


var x = b(6, 3);
console.log(x);

// console.log(a);
var arr = [3,5,12,8,6,20,14,15, 28,19,4];
var a = arr[0];
var n = arr.length-1;

for(var i=1; i<=n; i++)
{
    if(a > arr[i])
    {
        a = arr[i];
    }
}
console.log(a);
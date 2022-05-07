arr1 = [
    {
        name : "rohit",
        age : 25,
        city : "mumbai"
    },
    {
        name : "amar",
        age : 22,
        city : "mumbai"
    }
];


arr2 = [
    {
        name : "jaya",
        age : 28,
        city : "pune"
    },
    {
        name : "nidhi",
        age : 21,
        city : "indore"
    }
];


arr3 = [
    {
        name : "gaurav",
        age : 29,
        city : "bhopal"
    },
    {
        name : "aashish",
        age : 20,
        city : "indore"
    }
];

arr4 = [
    {
        name : "nilesh",
        age : 28,
        city : "mumbai"
    },
    {
        name : "vikas",
        age : 23,
        city : "pune"
    },
    {
        name : "vijay",
        age : 25,
        city : "indore"
    }
]

bigArr = [arr1, arr2, arr3, arr4];

newArr = [];
bigArr.forEach((x)=>{
    x.forEach((y)=>{
        if(y.age <= 25 && y.city == "indore")
        {
            newArr.push(y);
        }
    })
})

console.log(newArr);
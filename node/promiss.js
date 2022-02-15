const pr = new Promise((resolve)=>{
    console.log("done");
    setTimeout(()=>{
        console.log("hello");
        resolve("yep");
    }, 2000)
})

// pr.then((data)=>{
//     console.log(data);
// })

setTimeout(()=>{
    pr.then(data=>{
        console.log(data)
    })
}, 4000)
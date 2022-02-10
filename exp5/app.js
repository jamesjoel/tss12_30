const express = require("express");
const app = express();

app.set("view engine", "ejs");

app.use(express.static(__dirname+"/assets"));


app.get("/", (req, res)=>{
    // res.sendFile(__dirname+"/home.html");
    res.render("home");
});

app.get("/about", (req, res)=>{
    var a = "indore";
    var b = { x : "aman", y : "nidhi" };
    var c = ["red", "green", "blue"];
    var obj = { city : a, name : "rohit", age :  25, demo : b, color : c };
    res.render("about", obj);
})

app.get("/contact", (req, res)=>{
    var a = ["tarun", "aman", "ashish", "gaurav", "ankit", "nidhi", "nilesh"];

    var obj = { list : a };
    res.render("contact", obj);
})

app.get("/help", (req, res)=>{

    var data = [
        {
            name : "rohit",
            age : 25,
            city : "indore"
        },
        {
            name : "jaya",
            age : 21,
            city : "mumbai"
        },
        {
            name : "amar",
            age : 27,
            city : "pune"
        },
        {
            name : "nidhi",
            age : 20,
            city : "bhopal"
        }
    ];

    var obj = { data : data };
    res.render("help", obj);
})



app.listen(3000, ()=>{
    console.log("server running");
});

/*

res.send() ----------------- Send Data
res.sendFile()  ------------ Send Html File
res.render()    ------------ Send File + Data
res.redirect()  ------------ Redirect to another route


*/
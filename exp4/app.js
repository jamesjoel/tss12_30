var express = require("express");
var app = express();

// the app.use() is call before and route call
app.use(express.static(__dirname+"/assets"));


// app.get() is used for routing
app.get("/", (req, res)=>{
    res.sendFile(__dirname+"/home.html");
})

app.get("/about", (req, res)=>{
    res.sendFile(__dirname+"/about.html")
})
app.get("/contact", (req, res)=>{
    res.sendFile(__dirname+"/contact.html")

})

// app.listen is used for create virtual server with port
app.listen(3000, ()=>{
    console.log("server created");

    
})
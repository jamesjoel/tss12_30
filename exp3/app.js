var express = require("express");
var app = express();

// localhost:3000/about
app.get("/about", function(req, res){
    // res.send("about page");
    res.sendFile(__dirname+"/about.html");
});


// localhost:3000/contact
app.get("/contact", function(req, res){
    // res.send("contact page")
    // res.sendFile("c:/tss/tss12_30/exp3/contact.html")
    res.sendFile(__dirname+"/contact.html")
});


// localhost:3000
app.get("/", function(req, res){
    // res.send("home page")
    res.sendFile(__dirname+"/home.html");
});


app.listen(3000, function(){
    console.log("server running");
});
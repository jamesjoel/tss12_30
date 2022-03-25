var express = require("express");
var app = express();

app.get("/", (req, res)=>{
    // req.body
    // req.params
    console.log(req.headers);
    res.send("hello");
})

app.listen(3000);



/*
module.exports = function(){

    return 
}



*/
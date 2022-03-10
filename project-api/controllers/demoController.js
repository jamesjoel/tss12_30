const routes = require("express").Router();

routes.get("/", (req, res)=>{
    var arr = [
        {
            name : "rohit",
            age : 25,
            city : "indore"
        },
        {
            name : "amar",
            age : 31,
            city : "mumbai"
        }
    ];


    res.send(arr);
})


module.exports=routes;

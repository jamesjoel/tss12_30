const express = require("express");
const routes = express.Router();


routes.get("/:x", (req, res)=>{
    var a = req.params.x;
    console.log(a);
    res.render("about");
})

module.exports=routes;
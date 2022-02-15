const express = require("express");
const routes = express.Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;


routes.get("/", (req, res)=>{
    res.render("teacher");
})


routes.post("/save_teacher", (req, res)=>{
    //console.log(req.body);

    req.body.salary = parseInt(req.body.salary);
    req.body.age = parseInt(req.body.age);

    MongoClient.connect("mongodb://localhost:27017", (err, con)=>{
        var db = con.db("tss12");
        db.collection("teacher").insertOne(req.body, ()=>{
            res.redirect("/teacher");
        })
    })
})





module.exports=routes;
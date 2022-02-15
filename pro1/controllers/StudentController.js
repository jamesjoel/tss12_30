const express = require("express");
const routes = express.Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;


routes.get("/", (req, res)=>{
    res.render("student");
})

// localhost:3000/student/save_student
routes.post("/save_student", (req, res)=>{
    // console.log(req.body);
    req.body.fee = parseInt(req.body.fee);
    req.body.age = parseInt(req.body.age);
    MongoClient.connect("mongodb://localhost:27017", (err, con)=>{
        if(err){
            console.log(err);
            return;
        }
        // use tss12
        var db = con.db("tss12");
        db.collection("student").insertOne(req.body, (err)=>{
            if(err){
                console.log(err);
                return;
            }
            res.redirect("/");
        });
    });
})




module.exports=routes;
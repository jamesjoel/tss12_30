const express = require("express");
const routes = express.Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");

routes.get("/view", (req, res)=>{
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("student").find().toArray((err, result)=>{
            // console.log(result);
            var pagedata = { result : result };
            res.render("view_student", pagedata);
        });
    })
    
})



routes.get("/", (req, res)=>{
    res.render("student");
})

// localhost:3000/student/save_student
routes.post("/save_student", (req, res)=>{
    // console.log(req.body);
    req.body.fee = parseInt(req.body.fee);
    req.body.age = parseInt(req.body.age);
    MongoClient.connect(database.dbUrl, (err, con)=>{
        if(err){
            console.log(err);
            return;
        }
        // use tss12
        var db = con.db(database.dbName);
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
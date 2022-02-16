const express = require("express");
const routes = express.Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");

routes.get("/list", (req, res)=>{
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("teacher").find().toArray((err, result)=>{
            // console.log(result);
            var pagedata = { result : result };
            res.render("list_teacher", pagedata);
        });
    })
})


routes.get("/", (req, res)=>{
    res.render("teacher");
})
routes.post("/save_teacher", (req, res)=>{
    req.body.salary = parseInt(req.body.salary);
    req.body.age = parseInt(req.body.age);

    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("teacher").insertOne(req.body, ()=>{
            res.redirect("/teacher/list");
        })
    })
})





module.exports=routes;
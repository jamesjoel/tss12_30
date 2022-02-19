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


routes.get("/delete/:x", (req, res)=>{
    var a = req.params.x; // 510
    var b = mongodb.ObjectId(a); // ObjectId(510)
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("student").deleteMany({ _id : b }, ()=>{
            res.redirect("/student/view")
        })
    })
})


routes.get("/edit/:id", (req, res)=>{
    var id = req.params.id;
    var objid = mongodb.ObjectId(id);
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("student").find({ _id : objid }).toArray((err, result)=>{
            // console.log(result);
            var pagedata = { result : result[0] };
            res.render("edit_student", pagedata);
        })
    })
})


routes.post("/update_student/:id", (req, res)=>{
    var id = req.params.id;
    var objid = mongodb.ObjectId(id);
    // console.log(req.body);
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("student").updateMany({ _id : objid }, { $set : req.body }, ()=>{
            res.redirect("/student/view");
        })
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
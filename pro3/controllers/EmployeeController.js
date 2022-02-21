const express = require("express");
const routes = express.Router();
const database = require("../config/database");

const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;


routes.get("/", (req, res)=>{
    res.render("employee");
});

routes.get("/delete/:id", (req, res)=>{
    // console.log(req.params.id);
    var objid = mongodb.ObjectId(req.params.id);
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("employee").deleteMany({ _id : objid }, ()=>{
            res.redirect("/employee/list");
        })
    })
    // res.render("employee");
});


routes.get("/edit/:id", (req, res)=>{
    // console.log(req.params.id);
    var objid = mongodb.ObjectId(req.params.id);
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("employee").find({ _id : objid }).toArray((err, result)=>{
            var pagedata = { result : result[0] }
            res.render("employee_edit", pagedata);
        })
    })
});


routes.post("/update/:id", (req, res)=>{
    var objid = mongodb.ObjectId(req.params.id);
    req.body.salary = parseInt(req.body.salary);
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("employee").updateMany({ _id : objid }, { $set : req.body }, ()=>{
            res.redirect("/employee/list");
        })
    })
})




routes.post("/save", (req, res)=>{
    req.body.salary = parseInt(req.body.salary);
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("employee").insertOne(req.body, ()=>{
           res.redirect("/employee/list");
        })
    });
})



routes.get("/list", (req, res)=>{

    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("employee").find().toArray((err, result)=>{
            var pagedata = { result : result };
            res.render("employee_list", pagedata);
        })
    })

});



module.exports = routes;
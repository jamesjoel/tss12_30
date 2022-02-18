const express = require("express");
const routes = express.Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");

routes.get("/", (req, res)=>{
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("product").find().toArray((err, result)=>{
            var pagedata = { result : result };
            res.render("product", pagedata);
        })
    })
})



module.exports = routes;
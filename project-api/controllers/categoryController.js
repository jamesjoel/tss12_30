const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");
const collName = "category";

routes.get("/", (req, res)=>{
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection(collName).find().toArray((err, result)=>{
            res.send(result);
        })
    })
})

module.exports = routes;
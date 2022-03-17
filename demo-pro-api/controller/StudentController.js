const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");

routes.get("/", (req, res)=>{
    MongoClient.connect(database.dbUrl, (err, con)=>{
            var db = con.db(database.dbName);

            db.collection("student").find().toArray((err, result)=>{
                res.send(result);
            })
    })
})


routes.post("/", (req, res)=>{
    MongoClient.connect(database.dbUrl, (err, con)=>{
            var db = con.db(database.dbName);

            db.collection("student").insertOne(req.body, ()=>{
                res.send({ success : true });
            })
    })
})






module.exports = routes;
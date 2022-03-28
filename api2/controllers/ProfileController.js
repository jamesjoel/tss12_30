const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");
const jwt= require("jsonwebtoken");
const sha1 = require("sha1");

routes.get("/", (req, res)=>{
    if(req.headers.authorization)
    {
        var a = JSON.parse(req.headers.authorization);
        var data = jwt.decode(a, database.uniqueStr);
        if(data){
            console.log("********");
            var id = mongodb.ObjectId(data._id);
            MongoClient.connect(database.dbUrl, (err, con)=>{
                var db = con.db(database.dbName);
                db.collection("user").find({ _id : id }).toArray((err, result)=>{
                    res.status(200).send(result);
                })
            })
        }else{
            res.status(401).send({ message : "Un-Authorized User"});
        }

    }else{
        res.status(401).send({ message : "Un-Authorized User"});
    }
})




module.exports = routes;
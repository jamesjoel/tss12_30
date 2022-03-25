const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");
const collName = "user";
const jwt = require("jsonwebtoken");



routes.get("/", (req, res)=>{
    console.log(req.headers);
    if(req.headers.authorization){
        var token = JSON.parse(req.headers.authorization);
        var object = jwt.decode(token, database.myStr);
        MongoClient.connect(database.dbUrl, (err, con)=>{
            var db = con.db(database.dbName);
            db.collection(collName).find({ _id : mongodb.ObjectId(object._id) }).toArray((err, result)=>{
                res.send(result[0]);
            })
        })



    }else{
        res.status(401).send({ message : "unathorized user"});
    }
})

module.exports = routes;
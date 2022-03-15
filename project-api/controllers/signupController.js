const routes= require("express").Router();
const mongodb = require("mongodb");
const database = require("../config/database");
const MongoClient = mongodb.MongoClient;
const collName = "user";
const sha1  = require("sha1");

routes.post("/", (req, res)=>{
    // console.log(req.body);
    req.body.contact = parseInt(req.body.contact);
    delete req.body.re_password;
    req.body.password = sha1(req.body.password);


    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection(collName).insertOne(req.body, ()=>{
            res.send({ success : true });
        })
    })
})

module.exports = routes;
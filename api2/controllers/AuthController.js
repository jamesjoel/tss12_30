const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");
const jwt= require("jsonwebtoken");
const sha1 = require("sha1");

routes.post("/", (req, res)=>{
    var u = req.body.username;
    var p = req.body.password;

    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("user").find({ email : u }).toArray((err, result)=>{
            if(result.length == 1)
            {
                if(result[0].password == sha1(p))
                {
                    var a = jwt.sign(result[0], database.uniqueStr);
                    res.status(200).send({ success : true , authtoken : a });
                }
                else{

                    res.status(401).send({ type : 2});
                }
            }
            else{
                res.status(401).send({ type : 1});
            }
        })
    })
})




module.exports = routes;
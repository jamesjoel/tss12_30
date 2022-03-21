const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");
const collName = "user";
const sha1 = require("sha1");

routes.post("/", (req, res)=>{
    // console.log(req.body);
    var e = req.body.email;
    var p = req.body.password;
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection(collName).find({ email : e }).toArray((err, result)=>{
            if(result.length == 1) // when email is matched
            {
                if(result[0].password == sha1(p))
                {
                    res.status(200).send({ success : true });
                }
                else{
                    res.status(401).send({ type : 2 });
                }
            }
            else{ // when email is not-matched
                res.status(401).send({ type : 1});
            }
        })
    })

})

module.exports = routes;
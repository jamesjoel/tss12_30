const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");
const collName = "admin";
const sha1 = require("sha1");
const jwt = require("jsonwebtoken");

routes.post("/", (req, res)=>{
    // console.log(req.body);
    var u = req.body.username;
    var p = req.body.password;
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection(collName).find({ username : u }).toArray((err, result)=>{
            if(result.length == 1) // when email is matched
            {
                if(result[0].password == sha1(p))
                {
                    var token = jwt.sign(result[0], database.myStr, { expiresIn : '2h'});
                    // console.log(token);
                    res.status(200).send({ success : true, token : token });
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
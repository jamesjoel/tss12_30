const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");
const collName = "product";

routes.get("/", (req, res)=>{
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection(collName).find().toArray((err, result)=>{
            // res.send(result);
            var newresult = result.map((x)=>{
                x.path = "http://localhost:3000/product-img/"+x.image;
                return x;
            })

            res.send(newresult);
        })
    })
})

module.exports = routes;
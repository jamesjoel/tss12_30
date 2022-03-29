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

routes.post("/", (req, res)=>{
    var obj = req.body;
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection(collName).insertOne(obj, ()=>{
            res.send({ success : true });
        })
    })
})

routes.delete("/:id", (req, res)=>{
    var id = req.params.id;
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection(collName).deleteMany({ _id : mongodb.ObjectId(id)}, ()=>{
            res.send({ success : true });
        })
    })
})

routes.put("/:id", (req, res)=>{
    var id = req.params.id;
    var obj = req.body;
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection(collName).updateMany({ _id : mongodb.ObjectId(id)}, { $set : obj}, ()=>{
            res.send({ success : true });
        })
    })
})


module.exports = routes;
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");

module.exports.getAll=(a)=>{
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("student").find().toArray(a);
    })
}

module.exports.save=(a, b)=>{
    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection("student").insertOne(a, b);
    })
}




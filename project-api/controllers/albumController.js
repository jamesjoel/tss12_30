const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");
const collName = "album";
const jwt = require("jsonwebtoken");
const unique = require("unique-string-generator");
const path = require("path");



routes.post("/", (req, res)=>{
    if(req.headers.authorization){
        let token = JSON.parse(req.headers.authorization);
        let info = jwt.decode(token, database.myStr);
        if(info){
            // console.log(info);
            var id = info._id;
            var obj = JSON.parse(req.body.formdata);
            obj.user_id = id;

            // console.log(req.body);
            // console.log(req.files);
            var name = req.files.photo.name;
            var arr = name.split(".");
            var ext = arr[arr.length - 1];
            var new_name = unique.UniqueString()+"."+ext;
            obj.image = new_name;

            req.files.photo.mv(path.resolve()+"/assets/album-img/"+new_name, (err)=>{
                MongoClient.connect(database.dbUrl, (err, con)=>{
                    var db = con.db(database.dbName);
                    db.collection(collName).insertOne(obj, (err, result)=>{
                        obj._id = result.insertedId;
                        obj.path = "http://localhost:3000/album-img/"+new_name;
                        // console.log(obj);
                        res.send(obj);
                    })
                })
            })
            


        }else{
            res.status(401).send({ msg : "Un-Authorize User"});

        }
    }else{
        res.status(401).send({ msg : "Un-Authorize User"});
    }
})

routes.get("/", (req, res)=>{
    if(req.headers.authorization){
        var token = JSON.parse(req.headers.authorization);
        var info = jwt.decode(token, database.myStr);
        if(info){
            var id = info._id;
            MongoClient.connect(database.dbUrl, (err, con)=>{
                var db = con.db(database.dbName);
                db.collection(collName).find({ user_id : id }).toArray((err, result)=>{
                    // res.send(result);
                    var arr = result.map((x)=>{
                        x.path = "http://localhost:3000/album-img/"+x.image;
                        return x;
                    })
                    res.send(arr);
                })
            })

        }else{
            res.status(401).send({ msg : "Un-Authorized User"});

        }
    }else{
        res.status(401).send({ msg : "Un-Authorized User"});
    }
})

module.exports = routes;
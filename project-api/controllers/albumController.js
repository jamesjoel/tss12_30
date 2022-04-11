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
                    db.collection(collName).insertOne(obj, ()=>{
                        res.send({ success : true });
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

module.exports = routes;
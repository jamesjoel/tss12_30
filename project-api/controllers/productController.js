const routes = require("express").Router();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;
const database = require("../config/database");
const collName = "product";
const path = require("path");
const unique = require("unique-string-generator");

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

routes.post("/", (req, res)=>{
    // console.log(JSON.parse(req.body.formdata));
    // console.log(req.files);
    var obj = JSON.parse(req.body.formdata);
    var photo = req.files.photo;
    var name = photo.name;
    var arr = name.split(".");
    var ext = arr[arr.length-1];
    var str = unique.UniqueString();

    var new_name =  str+"."+ext;


    obj.image = new_name;
    obj.price = parseInt(obj.price);
    obj.discount = parseInt(obj.discount);

    var imagepath = path.resolve()+"/assets/product-img/"+new_name;
    

    MongoClient.connect(database.dbUrl, (err, con)=>{
        var db = con.db(database.dbName);
        db.collection(collName).insertOne(obj, ()=>{
            photo.mv(imagepath, (err)=>{
                res.send({ success : true });
            });
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
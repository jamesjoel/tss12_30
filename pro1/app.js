const express = require("express");
const app = express();
const mongodb = require("mongodb");
const MongoClient = mongodb.MongoClient;




app.set("view engine", "ejs");
app.use(express.static(__dirname+"/assets"));
app.use(express.json());
app.use(express.urlencoded());


app.post("/save_student", (req, res)=>{
    // console.log(req.body);
    req.body.fee = parseInt(req.body.fee);
    req.body.age = parseInt(req.body.age);
    MongoClient.connect("mongodb://localhost:27017", (err, con)=>{
        if(err){
            console.log(err);
            return;
        }
        // use tss12
        var db = con.db("tss12");
        db.collection("student").insertOne(req.body, (err)=>{
            if(err){
                console.log(err);
                return;
            }
            res.redirect("/");
        });
    });
})


app.get("/teacher", (req, res)=>{
    res.render("teacher");
})


app.post("/save_teacher", (req, res)=>{
    //console.log(req.body);

    req.body.salary = parseInt(req.body.salary);
    req.body.age = parseInt(req.body.age);

    MongoClient.connect("mongodb://localhost:27017", (err, con)=>{
        var db = con.db("tss12");
        db.collection("teacher").insertOne(req.body, ()=>{
            res.redirect("/teacher");
        })
    })
})


app.get("/", (req, res)=>{
    res.render("index");
})
app.get("/about", (req, res)=>{
    res.render("about");
})
app.get("/contact", (req, res)=>{
    res.render("contact");
})
app.get("/student", (req, res)=>{
    res.render("student");
})




const port = 3000;
app.listen(port, ()=>{
    console.log("server running");
})
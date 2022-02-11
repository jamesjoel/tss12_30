const express = require("express");
const app = express();

app.set("view engine", "ejs");
app.use(express.static(__dirname+"/assets"));
app.use(express.json());
app.use(express.urlencoded());


app.post("/save_student", (req, res)=>{
    console.log(req.body);
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
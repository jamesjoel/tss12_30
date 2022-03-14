const express = require("express");
const app = express();
const mongodb = require("mongodb");
const cors = require("cors");

app.use(express.json());
app.use(express.urlencoded({ extended : true }));
app.use(cors());

app.post("/api/student", (req, res)=>{
    console.log(req.body);
    res.send({ success : true });
})



app.listen(3000, ()=>{
    console.log("server running");
})



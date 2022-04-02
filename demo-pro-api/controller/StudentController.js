const routes = require("express").Router();
const Student = require("../models/Student");


routes.get("/", (req, res)=>{
    Student.getAll((err, result)=>{
        res.send(result);
    });
})


routes.post("/", (req, res)=>{
    Student.save(req.body, ()=>{
        res.send({ success : true });
    });
})






module.exports = routes;
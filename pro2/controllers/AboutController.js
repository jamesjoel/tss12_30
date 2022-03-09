const express = require("express");
const routes = express.Router();

routes.get("/", (req, res)=>{
    res.render("about");
});
routes.get("/more", (req, res)=>{
    res.render("more");
});
routes.get("/info", (req, res)=>{
    res.render("info");
});
routes.get("/more/info", (req, res)=>{
    res.render("more-info");
});



module.exports = routes;
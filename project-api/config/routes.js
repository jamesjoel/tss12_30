

// const express = require("express");
const routes = require("express").Router();

routes.use("/api/demo", require("../controllers/demoController"));


module.exports=routes;
